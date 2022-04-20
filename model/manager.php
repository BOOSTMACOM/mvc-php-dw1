<?php

class Manager
{

    private static ?PDO $pdo = NULL;

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
}