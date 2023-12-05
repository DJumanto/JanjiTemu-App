<?php

namespace App\Http\Services\UserGroupServices;
use App\Http\Repositories\SqlUserGroup;
use App\Http\Repositories\SqlUser;
use App\Http\Repositories\SqlGroupRole;
use App\Mail\PrivilegeNotifMail;
use Illuminate\Support\Facades\Mail;
class ChangeGroupAdminService{
    private SqlUserGroup $sqlUserGroup;
    private SqlUser $sqlUser;
    private SqlGroupRole $sqlGroupRole;

    public function __construct(SqlUserGroup $sqlUserGroup, SqlUser $sqlUser, SqlGroupRole $sqlGroupRole){
        $this->sqlUserGroup = $sqlUserGroup;
        $this->sqlUser = $sqlUser;
        $this->sqlGroupRole = $sqlGroupRole;
    }
    public function execute(string $groupId, int $userId, int $adminId){
        $this->sqlUserGroup->setPrivilege($groupId, $userId, 2);
        $this->sqlUserGroup->setPrivilege($groupId, $adminId, 1);
        $user = $this->sqlUser->getUsernameByID($userId);
        $user = $user->first_name . " " . $user->last_name;
        $email = $this->sqlUser->getEmailByID($userId);
        $master = $this->sqlUserGroup->getUserInGroupByRoleId(1, $groupId)[0];
        $master = $master->first_name . " " . $master->last_name;
        $privilege = 'master';
        Mail::to($email)->send(new PrivilegeNotifMail($user, $privilege, $master));
    }
}