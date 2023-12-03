<?php

namespace App\Http\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\UserGroup;

class SqlUserGroup{

    public function getUserGroup(int $count){
        $results = DB::table('user_group')->limit($count)->get();
        return $results;
    }

    public function persist(UserGroup $userGroup){
        DB::table('user_groups')->upsert([
            'ug_id' => $userGroup->getUserGroupId(),
            'User_u_id' => $userGroup->getUserGroupUserId(),
            'Group_g_id' => $userGroup->getUserGroupGroupId(),
            'Group_Role_gr_id' => $userGroup->getUserGroupGroupRoleId(),
        ], 'ug_id');
    }
}