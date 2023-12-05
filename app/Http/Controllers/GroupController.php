<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Http\Services\GroupServices\GetGroupService;
use App\Http\Services\GroupServices\CreateGroupService;
use App\Http\Services\GroupServices\SearchGroupService;
use App\Http\Services\UserGroupServices\AddUserGroupService;
use App\Http\Services\UserGroupServices\GetUserInGroupByRoleService;
use App\Http\Services\GroupServices\GetGroupByIdService;
use App\Http\Services\GroupServices\GetGroupTotalEventService;
use App\Http\Services\UserGroupServices\GetGroupMemberService;
use App\Models\UserGroup;
use Throwable;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;

class GroupController extends Controller
{
    //show group list
    public function GetGroup(Request $request, GetGroupService $getGroupService)
    {
        $count = $request->input('count') ?? 10;
        $results = $getGroupService->execute($count);
        // dd($results);
        return view('group', ['results' => $results]);
    }

    //create new group, and auto set user as master
    public function CreateGroup(Request $request, AddUserGroupService $addUserGroupService, CreateGroupService $createGroupService)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $groupId = Str::uuid();
        DB::beginTransaction();
        try {
            $group = new Group(
                $groupId,
                $request->input('name'),
                $request->input('description'),
                0,
                date('Y-m-d H:i:s')
            );
            $createGroupService->execute($group);
            $userGroupId = Str::uuid();
            $userGroup = new UserGroup(
                $userGroupId,
                Auth::user()->id,
                $groupId,
                1
            );
            $addUserGroupService->execute($userGroup);
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
        DB::commit();
        dd('success');
        return redirect()->route('group', ['status' => 'success membuat grup']);
    }

    //show group search result
    public function SearchGroup(Request $request, SearchGroupService $searchGroupService)
    {
        $group = $request->input('group');
        $results = $searchGroupService->execute($group);
        return view('searchgroup', ['results' => $results]);
    }

    //Get group by id and show it's group's master
    public function GetGroupById(string $id, Request $request, GetGroupByIdService $getGroupByIdService, GetUserInGroupByRoleService $getUserInGroupByRoleService, GetGroupTotalEventService $getGroupTotalEventService, GetGroupMemberService $getGroupMemberService)
    {
        $results = $getGroupByIdService->execute($id);
        // if(isEmpty($results)){
        //     return view('groupdetail', ['results' => $results]);
        // }
        $members = $getGroupMemberService->execute($id);
        $results->total_event = $getGroupTotalEventService->execute($id);
        $group_master = $getUserInGroupByRoleService->execute(1, $id)[0];
        return view('groupdetail', ['results' => $results, 'group_master' => $group_master, 'members' => $members]);
    }

    // // Fungsi selama Pengembangan FE Group Detail
    // public function ShowGroupDetailTest()
    // {
    //     return view('groupdetail');
    // }
}
