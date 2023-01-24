<?php

namespace Sundarban\Project\Admin;

use Sundarban\Project\Includes\Database;

class Model
{

    public function getAllUser()
    {

        $sql = "select * from users where role='user'";
        $adminDatabase = new Database();
        return $adminDatabase->getSelect($sql, 'multiple');
    }

    public function deleteUser($userId)
    {

        $sql = "Delete from users where id=$userId";
        $adminDatabase = new Database();
        if ($adminDatabase->deleteRow($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function updateUser($userId)
    {
        $adminDatabase = new Database();
        $sql = "select * from users where id=$userId";
        return $adminDatabase->getSelect($sql);

    }
}
