<?php


function index()
{
    require_once '../model/manager.php';
    require_once '../model/article-manager.php';
    $article = new ArticleManager();
    $articles = $article->getAllArticle();

    include '../view/blog/index.html.php';
}

function article()
{
    if (!empty($_GET['id'])) {
        require '../model/manager.php';
        require_once '../model/article-manager.php';
        $articleManager = new ArticleManager();
        $article = $articleManager->getArticleById($_GET['id']);
        require_once '../model/comment-manager.php';
        $commentManager = new CommentManager();
        $comment = $commentManager->getCommentbyArticleId($_GET['id']);

        include '../view/blog/article.html.php';
    } else {
        header('Location: /');
        exit;
    }
}

function comment()
{
    if (!empty($_GET['id'])) {
        include '../view/blog/comment.html.php';
    }
    if (!empty($_POST['submit'])) {
        if (isset($_POST['anonymous'])) {
            require '../model/manager.php';
            $user = '(ANONYME)';
            require_once '../model/comment-manager.php';
            $comment = new CommentManager();
            $insert = $comment->insertComment($_POST['content'], $user, $_GET['id']);
            header('Location: /?controller=blog');
            exit;
        } else {
            require '../model/manager.php';
            require_once '../model/comment-manager.php';
            $comment = new CommentManager();
            $comments = $comment->insertComment($_POST['content'], $_POST['author'], $_GET['id']);
            header('Location: /?controller=blog');
            exit;
        }
    }
}

function addArticle()
{
    include '../view/blog/add-article.html.php';
    if (!empty($_POST['submit'])) {
        require_once '../model/manager.php';
        require_once '../model/article-manager.php';
        $article = new ArticleManager();
        $insert = $article->insertArticle($_POST['title'], $_POST['content']);
        header('Location: /?controller=blog');
        exit;
    }
}
