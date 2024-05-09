<?php

class Novinky extends Databaza
{
    private $db;

    public function __construct()
    {
        $this->db = $this->db_connection();
    }

    public function select(){

        try{

            $sql = "SELECT * FROM novinky";
            $query = $this->db->query($sql);
            $clanky = $query->fetchAll();
            return $clanky;

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}

?>