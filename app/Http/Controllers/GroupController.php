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
use App\Models\UserGroup;
use Throwable;
use Illuminate\Support\Facades\Auth;
class GroupController extends Controller
{
    public function GetGroup(Request $request, GetGroupService $getGroupService)
    {
        $count = $request->input('count')??10;
        $results = $getGroupService->execute($count);
        dd($results);
        return view('group',['results'=>$results]);
    }

    public function CreateGroup(Request $request, AddUserGroupService $addUserGroupService, CreateGroupService $createGroupService)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $groupId = Str::uuid();
        DB::beginTransaction();
        try{
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
        }
        catch(\Exception $e){
            DB::rollback();
            throw $e;
        }
        DB::commit();
        dd('success');
        return redirect()->route('group',['status'=>'success membuat grup']);
    }

    public function SearchGroup(Request $request, SearchGroupService $searchGroupService)
    {
        $group = $request->input('group');
        $results = $searchGroupService->execute($group);
        return view('searchgroup',['results'=>$results]);
    }
}
