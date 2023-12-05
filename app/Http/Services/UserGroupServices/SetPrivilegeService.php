<?php

namespace App\Http\Services\UserGroupServices;
use App\Http\Repositories\SqlUserGroup;

class SetPrivilegeService{

    private SqlUserGroup $sqlUserGroup;
    public function __construct(SqlUserGroup $sqlUserGroup){
        $this->sqlUserGroup = $sqlUserGroup;
    }
    public function execute(string $groupId, int $userId, int $roleId){
        $this->sqlUserGroup->setPrivilege($groupId, $userId, $roleId);
    }
}