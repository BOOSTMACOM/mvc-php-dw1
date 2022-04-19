<?php

require '../model/article-manager.php';
require '../model/comment-manager.php';

/**
 * Affichage de la page d'accueil du blog (tous les articles)
 * @return [type]
 */
function index()
{
    $articles = getAll();

    include '../view/blog/index.html.php';
}

function article()
{
    if(!empty($_GET['id']))
    {
        $article = getById($_GET['id']);
        $comment = getCommentById($_GET['id']);
        include '../view/blog/article.html.php';
    }
    else
    {
        header('Location: /'); exit;
    }
}

function comment()
{
    if(!empty($_GET['id']))
    {        
        include '../view/blog/comment.html.php'; 
    }
    if(!empty($_POST['submit']))
        {
            $comment = addComment($_POST['content'],$_POST['author'],$_GET['id']);
        }

}

