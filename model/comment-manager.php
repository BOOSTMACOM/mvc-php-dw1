<?php

define('TABLE2', 'comment');

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=mvc-blog','root','', [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

}
catch(PDOException $pe)
{
    die("Error : " . $pe->getMessage());
}

function getAllComments()
{
    $pdo = $GLOBALS['pdo'];

    $sql = "SELECT * FROM " . TABLE2;
    $query = $pdo->query($sql);
    return $query->fetchAll();
}

function getCommentById(int $id)
{
    $pdo = $GLOBALS['pdo'];

    $sql = "SELECT * FROM " . TABLE2 . " WHERE article_id = :id";
    $query = $pdo->prepare($sql);
    $query->execute([
        'id' => $id
    ]);

    return $query->fetchAll();
}

function getCommentaireById(int $id)
{
    $pdo = $GLOBALS['pdo'];

    $sql = "SELECT * FROM " . TABLE2 . " WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->execute([
        'id' => $id
    ]);

    return $query->fetch();
}


function addComment(string $content, string $author, int $article_id)
{
    $pdo = $GLOBALS['pdo'];

    $sql = "INSERT INTO " . TABLE2 . " (content,author,created_at,article_id) VALUES (:content,:author,NOW(),:article_id)";
    $query = $pdo->prepare($sql);
    $query->execute([
        'content' => $content,
        'author' => $author,
        'article_id' => $article_id,
    ]);

    return $query->fetch();
}

function deleteComment(int $id)
{
    $pdo = $GLOBALS['pdo'];

    $sql = "DELETE FROM " . TABLE2 . " WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->execute([
        'id' => $id,
    ]);
}


// etc...