<?php

class Destinacie extends Database
{
    private $db;

    public function __construct()
    {
        $this->db = $this->db_connection();
    }

    public function select(){

        try{

            $sql = "SELECT * FROM destinacie";
            $query = $this->db->query($sql);
            $destinacie = $query->fetchAll();
            return $destinacie;

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}

?>