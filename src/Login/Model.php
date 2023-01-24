<?php

namespace Sundarban\Project\Login;

use Sundarban\Project\Includes\Database;
use Sundarban\Project\Includes\Session;

class Model
{

    public function checkLogin($username, $password){

        $sql = "select * from `users` where email='$username' and password='$password'";

        $dbConnection = new Database();
        return $dbConnection->getSelect($sql);
    }

}
