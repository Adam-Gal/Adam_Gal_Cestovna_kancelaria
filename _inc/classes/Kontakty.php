<?php

class Kontakty extends Database
{
    private $db;

    public function __construct()
    {
        $this->db = $this->db_connection();
    }

    public function select_kontakty(){

        try{

            $sql = "SELECT * FROM kontakty";
            $query = $this->db->query($sql);
            $kontakty = $query->fetchAll();
            return $kontakty;

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function select_obrazky(){

        try{

            $sql = "SELECT * FROM kontakt_obrazky";
            $query = $this->db->query($sql);
            $obrazky = $query->fetchAll();
            return $obrazky;

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}

?>