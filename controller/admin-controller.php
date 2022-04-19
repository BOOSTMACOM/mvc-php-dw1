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


function deleteCommentaire()
{
    $commentaire = getCommentaireById(intval($_GET['id']));
    include '../view/admin/delete-comment.html.php';

    if(isset($_POST['submit']))
    {
        $commentaire = deleteComment(intval($_GET['id']));
        header('Location: /?controller=admin'); exit;
    }

}

function deleteArticle()
{
    $article = getById(intval($_GET['id']));
    include '../view/admin/delete-article.html.php';

    if(isset($_POST['submit']))
    {
        $article = deleteArt(intval($_GET['id']));
        header('Location: /?controller=admin'); exit;
    }

}