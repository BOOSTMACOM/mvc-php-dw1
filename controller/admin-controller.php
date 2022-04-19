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
