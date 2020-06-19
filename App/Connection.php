<?php

namespace App;

class Connection
{
    public function getDb()
    {
        try
        {
            $conn = new \PDO(
                "mysql:host=localhost;dbname=myframework;charset=utf8",
                "root",
                ""
            );

            return $conn;
        }
        catch(\PDOException $e)
        {
            throw new PDOException($e);
        }
    }
}

?>