<?php

require 'vendor/autoload.php';

$module = $_GET['module'] ?? 'Login';

$controllerClass = 'Sundarban\\Project\\' . $module . '\\Controller';

if (!class_exists($controllerClass)) {
    echo 'Class does not exist';
}

$controllerObject = new $controllerClass();
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $controllerObject->$action();
} else {
    $controllerObject->index();
}

exit;







