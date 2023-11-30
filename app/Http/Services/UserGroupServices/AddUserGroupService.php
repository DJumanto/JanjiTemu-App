<?php

namespace App\Http\Services\UserGroupServices;
use App\Http\Repositories\SqlUserGroup;
use App\Models\UserGroup;
class AddUserGroupService{

    private SqlUserGroup $sqlUserGroup;
    public function __construct(SqlUserGroup $sqlUserGroup){
        $this->sqlUserGroup = $sqlUserGroup;
    }

    public function execute(UserGroup $userGroup){
        $this->sqlUserGroup->persist($userGroup);
    }
}