<?php

class Comment extends Manager
{
    public $id;
    public $content;
    public $author;
    public $created_at;
    public $article_id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getCreated_at()
    {
        return $this->created_at;
    }

    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getArticle_id()
    {
        return $this->article_id;
    }

    public function setArticle_id($article_id)
    {
        $this->article_id = $article_id;
    }
}