<?php

namespace Sundarban\Project\Admin;

class Controller
{
    public $adminModel;

    public function __construct()
    {
        $this->adminModel = new Model();
    }

    public function index()
    {

        $users = $this->adminModel->getAllUser();


        $view = 'src/Admin/view.html.php';
        include 'src/Template/template.php';
    }

    public function deleteUser()
    {
        $userId = $_GET['id'];
        $deleteAction = $this->adminModel->deleteUser($userId);
        if($deleteAction){
            $this->index();
        }
    }

    public function updateUser(){
        $userId = $_GET['id'];
        $user = $this->adminModel->updateUser($userId);

        $view = 'src/Admin/update.html.php';
        include 'src/Template/template.php';
    }



}
