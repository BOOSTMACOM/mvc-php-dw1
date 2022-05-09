<?php

require '../core/manager.php';
require '../core/view.php'; 

class BlogController
{
    public function index()
    {
        $instanceManager = new Manager();
        $recuperationArticles = $instanceManager->getAll('article', 'Article');
        $instanceView = new View('blog/index.html.php');    
        $view = $instanceView->render($recuperationArticles);
        
    }

    public function article()
    {
        $instanceManager = new Manager();
        $recuperationArticle = $instanceManager->getById($_GET['id'], 'article', 'Article');
        $instanceView = new View('blog/article.html.php');
        $view = $instanceView->render($recuperationArticle);
    }
}