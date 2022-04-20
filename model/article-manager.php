<?php


class ArticleManager extends Manager
{
    public const TABLE = "article";

    public function getAllArticle()
    {
        $sql = "SELECT * FROM " . self::TABLE;
        $query = $this->getPdo()->query($sql);
        return $query->fetchAll();
    }

    public function getArticleById(int $id)
    {

        $sql = "SELECT * FROM " . self::TABLE . " WHERE id = :id";
        $query = $this->getPdo()->prepare($sql);
        $query->execute([
            'id' => $id
        ]);

        return $query->fetch();
    }

    public function insertArticle(string $title, string $content)
    {

        $sql = "INSERT INTO " . self::TABLE . " (title,content,created_at) VALUES (:title,:content,NOW())";
        $query = $this->getPdo()->prepare($sql);
        $query->execute([
            'title' => $title,
            'content' => $content,
        ]);

        return $query->fetch();
    }

    public function updateArticle(string $title, string $content, int $id)
    {

        $sql = "UPDATE " . self::TABLE . " SET title = :title,content = :content WHERE id = :id";
        $query = $this->getPdo()->prepare($sql);
        $query->execute([
            'title' => $title,
            'content' => $content,
            'id' => $id,
        ]);
    }

    public function deleteArticle(int $id)
    {

        $sql = "DELETE FROM " . self::TABLE . " WHERE id = :id";
        $query = $this->getPdo()->prepare($sql);
        $query->execute([
            'id' => $id,
        ]);
    }
}

// etc...