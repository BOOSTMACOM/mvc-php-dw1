<?php

if (!empty($_GET['controller'])) {
    $controller = $_GET['controller'];
} else {
    $controller = 'home';
}

if (file_exists('../src/controller/' . $controller . '-controller.php')) {
    require '../src/controller/' . $controller . '-controller.php';

    if (!empty($_GET['action'])) {
        $instanceController = new $controller;
        $function = $_GET['action'];
        $action = $instanceController->$function();
    } else {
        $instanceController = new $controller;
        $action = $instanceController->index();
    }
}

if(method_exists($instanceController, 'render')){
    $instanceController->render($action);
}