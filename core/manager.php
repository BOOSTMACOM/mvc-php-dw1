<?php

class Manager
{

    protected static ?PDO $pdo = NULL;

    protected function getPdo()
    {
        if (self::$pdo == NULL) {

            try {
                self::$pdo = new PDO('mysql:host=localhost;dbname=mvc-blog', 'root', '', [
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]);
            } catch (PDOException $pe) {
                die("Error : " . $pe->getMessage());
            }
        }
        
            return self::$pdo;
    }


    public function getAll(string $table,string $class)
    {
        $sql = "SELECT * FROM " . $table;
        $query = $this->getPdo()->query($sql);
        $alls = $query->fetchAll();
        $result = [];
        require_once '../src/entity/' . $class . '.php';
        foreach($alls as $key)
        {
            $obj = new $class();
            foreach($key as $k => $v)
            {
                $obj->$k = $v;
            }
            $result[] = $obj;
        }

        return $result;
    }

    public function getById(int $id, string $table, string $class)
    {
        $sql = "SELECT * FROM " . $table . " WHERE id = :id";
        $query = $this->getPdo()->prepare($sql);
        $query->execute([
            'id' => $id
        ]);
        $result = $query->fetch();
        $table = [];
        require_once '../src/entity/' . $class . '.php';
            $obj = new $class();
            foreach($result as $k => $v)
            {
                $obj->$k = $v;
            }
            $table[] = $obj;
        return $table;
    }
    

    public function insert(array $data, string $table)
    {
        $sql = "INSERT INTO " . $table . " (";
        $sql .= implode(',', array_keys($data));
        $sql .= ") VALUES (";
        $sql .= ":" . implode(',:', array_keys($data));
        $sql .= ")";

        $query = $this->getPdo()->prepare($sql);
        $query->execute($data);

        return $query->fetch();
    }

    public function update(array $data, string $table)
    {
        $sql = "UPDATE " . $table . " SET ";
        $sql .= implode('=:', array_keys($data));
        $sql .= "=:" . implode('=:', array_keys($data));
        $sql .= " WHERE id = :id";

        $query = $this->getPdo()->prepare($sql);
        $query->execute($data);

        return $query->fetch();
    }


    public function delete(int $id, string $table)
    {
        $sql = "DELETE FROM " . $table . " WHERE id = :id";
        $query = $this->getPdo()->prepare($sql);
        $query->execute([
            'id' => $id
        ]);

        return $query->fetch();
    }
}