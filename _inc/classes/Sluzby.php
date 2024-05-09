<?php

class Sluzby extends Databaza
{
    private $db;

    public function __construct()
    {
        $this->db = $this->db_connection();
    }

    public function select(){

        try{

            $sql = "SELECT * FROM sluzby";
            $query = $this->db->query($sql);
            $sluzba = $query->fetchAll();
            return $sluzba;

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}

?>