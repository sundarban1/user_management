<?php

namespace Sundarban\Project\Includes;

class Session
{

    public function __construct(){
        session_start(); // start session
    }


    public function setUserId($userId){

        $_SESSION['userId'] = $userId;

    }


    public function getUserId(){

        return $_SESSION['userId'];
    }


}
