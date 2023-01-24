<?php

namespace Sundarban\Project\Profile;

use Sundarban\Project\Includes\Database;

class Model
{
    public function getUserById($id)
    {
        $sql = "select * from `users` where id=$id";

        $dbConnection = new Database();
        return $dbConnection->getSelect($sql);

    }
}
