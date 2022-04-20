<?php

class CommentManager extends Manager
{

    public const TABLEco = "comment";

    public function getAllComment()
    {

        $sql = "SELECT * FROM " . self::TABLEco;
        $query = $this->getPdo()->query($sql);
        return $query->fetchAll();
    }

    public function getCommentbyArticleId(int $id)
    {

        $sql = "SELECT * FROM " . self::TABLEco . " WHERE article_id = :id";
        $query = $this->getPdo()->prepare($sql);
        $query->execute([
            'id' => $id
        ]);

        return $query->fetchAll();
    }

    public function getCommentbyId(int $id)
    {

        $sql = "SELECT * FROM " . self::TABLEco . " WHERE id = :id";
        $query = $this->getPdo()->prepare($sql);
        $query->execute([
            'id' => $id
        ]);

        return $query->fetch();
    }


    public function insertComment(string $content, string $author, int $article_id)
    {

        $sql = "INSERT INTO " . self::TABLEco . " (content,author,created_at,article_id) VALUES (:content,:author,NOW(),:article_id)";
        $query = $this->getPdo()->prepare($sql);
        $query->execute([
            'content' => $content,
            'author' => $author,
            'article_id' => $article_id,
        ]);

        return $query->fetch();
    }

    public function deleteComment(int $id)
    {

        $sql = "DELETE FROM " . self::TABLEco . " WHERE id = :id";
        $query = $this->getPdo()->prepare($sql);
        $query->execute([
            'id' => $id,
        ]);
    }
}
// etc...