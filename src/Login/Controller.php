<?php

namespace Sundarban\Project\Login;


use http\Header;
use Sundarban\Project\Includes\Session;

class Controller
{
    public function index()
    {


        if (isset($_POST['Login'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];

            if(empty($username) || empty($password)){
                $msg = "Username or password cannot be empty";
                $view = 'src/Login/view.html.php';
                include 'src/Template/template.php';
            }else {
                $model = new Model();
                $data = $model->checkLogin($username, $password);

                if (empty($data)) {

                    // invalid username or password

                    $msg = "Invalid username or password";
                    $view = 'src/Login/view.html.php';
                    include 'src/Template/template.php';

                } elseif ($data['role'] == 'admin') {

                    header('Location: index.php?module=Admin');
                    // render admin page
                } elseif ($data['role'] === 'user') {

                    $userSession = new Session();
                    $userSession->setUserId($data['id']);

                    header('Location: index.php?module=Profile');
                }
            }

        } else {
            $view = 'src/Login/view.html.php';
            include 'src/Template/template.php';
        }

    }


    public function logout()
    {

        session_destroy();
        header('Location: index.php?module=Login');

    }

}
