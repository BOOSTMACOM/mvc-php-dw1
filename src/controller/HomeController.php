<?php
require '../core/manager.php';
require '../core/view.php'; 

class HomeController
{

public function index()
{
    $view = new View('home/index.html.php');
    $view->render();
}

}