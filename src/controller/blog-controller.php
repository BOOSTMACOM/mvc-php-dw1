<?php

require '../core/manager.php';
require '../core/view.php'; 

class Blog
{
    public function index()
    {
        require_once '../src/manager/article-manager.php'; 
        $articleManager = new ArticleManager();
        $view = new View('blog/index.html.php' , [
            'articles' => $articleManager->getAllArticle()
        ]);
        $view->render();
    }

    public function article()
    {
        require_once '../src/manager/article-manager.php';
        require_once '../src/manager/comment-manager.php';  
        $articleManager = new ArticleManager();
        $commentManager = new CommentManager();
        $view = new View('blog/article.html.php' , [
            'article' => $articleManager->getArticleById($_GET['id']),
            'comments' => $commentManager->getCommentbyArticleId($_GET['id'])
        ]);
        $view->render();
    }

    public function comment()
    {
        require_once '../src/manager/comment-manager.php'; 
        $commentManager = new CommentManager();
        $view = new View('blog/comment.html.php' , [
            'comments' => $commentManager->getAllComment($_GET['id'])
        ]);
        $view->render();
        if(isset($_POST['submit']))
        {
            $commentManager->insertComment($_POST['content'], $_POST['author'], $_GET['id']);
            header('Location: /?controller=blog&action=article&id=' . $_GET['id']);
        }

    }

    public function addArticle()
    {
        require_once '../src/manager/article-manager.php'; 
        $articleManager = new ArticleManager();
        $view = new View('blog/add-article.html.php' , [
            'articles' => $articleManager->getAllArticle()
        ]);
        $view->render();
        if(isset($_POST['submit']))
        {
            $articleManager->insertArticle($_POST['title'], $_POST['content'], $_GET['id']);
            header('Location: /?controller=blog');
        }
    }


}