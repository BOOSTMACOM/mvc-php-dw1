<?php

define('TABLE', 'article');

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

function getAll()
{
    $pdo = $GLOBALS['pdo'];

    $sql = "SELECT * FROM " . TABLE;
    $query = $pdo->query($sql);
    return $query->fetchAll();
}

function getById(int $id)
{
    $pdo = $GLOBALS['pdo'];

    $sql = "SELECT * FROM " . TABLE . " WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->execute([
        'id' => $id
    ]);

    return $query->fetch();
}

function addArticle(string $title, string $content)
{
    $pdo = $GLOBALS['pdo'];

    $sql = "INSERT INTO " . TABLE . " (title,content,created_at) VALUES (:title,:content,NOW())";
    $query = $pdo->prepare($sql);
    $query->execute([
        'title' => $title,
        'content' => $content,
    ]);

    return $query->fetch();
}

function updateArticle(string $title, string $content, int $id)
{
    $pdo = $GLOBALS['pdo'];

    $sql = "UPDATE " . TABLE . " SET title = :title,content = :content WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->execute([
        'title' => $title,
        'content' => $content,
        'id' => $id,
    ]);
}

function deleteArt(int $id)
{
    $pdo = $GLOBALS['pdo'];

    $sql = "DELETE FROM " . TABLE . " WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->execute([
        'id' => $id,
    ]);
}


// etc...