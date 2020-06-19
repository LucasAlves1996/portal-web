<?php

namespace MyFramework\Model;

abstract class Model
{
    protected $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function create()
    {
        $sql = "INSERT INTO $this->table VALUES (NULL, ".$this->getObjectAttributes().");";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    }

    public function read()
    {
        $sql = "SELECT * FROM $this->table;";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll();
    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function search($search, $param1 = '', $param2 = '', $param3 = '')
    {
        if($param2 == '' && $param3 == '')
        {
            $sql = "SELECT * FROM $this->table WHERE $param1 LIKE '%$search%'";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
        }
        else if($param3 == '')
        {
            $sql = "SELECT * FROM $this->table WHERE $param1 LIKE '%$search%' OR $param2 LIKE '%$search%'";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
        }
        else
        {
            $sql = "SELECT * FROM $this->table WHERE $param1 LIKE '%$search%' OR $param2 LIKE '%$search%' OR $param3 LIKE '%$search%'";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
        }

        return $stmt->fetchAll();
    }
}

?>