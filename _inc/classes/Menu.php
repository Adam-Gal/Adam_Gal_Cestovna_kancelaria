<?php

class Menu extends Databaza
{
    private $db;

    public function __construct()
    {
        $this->db = $this->db_connection();
    }

    public function select(){

        try{

            $sql = "SELECT * FROM menu";
            $query = $this->db->query($sql);
            $podstranka = $query->fetchAll();
            return $podstranka;

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}

?>