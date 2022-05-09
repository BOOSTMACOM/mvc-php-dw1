<?php

if (!empty($_GET['controller'])) {
    $controller = ucfirst($_GET['controller'])  . 'Controller';
} else {
    $controller = 'HomeController';
}

$controllerFileName = '../src/controller/' . $controller . '.php';

if(file_exists($controllerFileName)) {

    if (!empty($_GET['action'])) {
        require $controllerFileName;
        $instanceController = new $controller;
        $function = $_GET['action'];
        $action = $instanceController->$function();
    } else {
        require '../src/controller/' . $controller . '.php';
        $instanceController = new $controller;
        $action = $instanceController->index();
    }
}

if(method_exists($instanceController, 'render')){
    $instanceController->render($action);
}