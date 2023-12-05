<?php

namespace App\Http\Services\UserGroupServices;
use App\Http\Repositories\SqlUserGroup;
class ChangeGroupAdminService{
    private SqlUserGroup $sqlUserGroup;
    public function __construct(SqlUserGroup $sqlUserGroup){
        $this->sqlUserGroup = $sqlUserGroup;
    }
    public function execute(string $groupId, int $userId, int $adminId){
        $this->sqlUserGroup->setPrivilege($groupId, $userId, 2);
        $this->sqlUserGroup->setPrivilege($groupId, $adminId, 1);
    }
}