<?php

class Special extends Database
{
    private $db;

    public function __construct()
    {
        $this->db = $this->db_connection();
    }

    public function select(){

        try{

            $sql = "SELECT * FROM special";
            $query = $this->db->query($sql);
            $special = $query->fetchAll();
            return $special;

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}

?>