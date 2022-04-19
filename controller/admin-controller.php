<?php

require '../model/article-manager.php';
require '../model/comment-manager.php';

/**
 * Affichage de la page d'accueil admin (tous les articles,tout les commentaires + CRUD)
 * @return [type]
 */
function index()
{
    $articles = getAll();
    $comments = getAllComments();

    include '../view/admin/index.html.php';
}

function update()
{
    $article = getById($_GET['id']);
    include '../view/admin/update-article.html.php';
    
    if(isset($_POST['submit']))
    {
        $article = updateArticle($_POST['title'],$_POST['content'],$_GET['id']);
        header('Location: /?controller=admin'); exit;
    }
}