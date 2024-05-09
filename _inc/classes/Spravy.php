<?php

class Spravy extends Databaza
{
    private $db;

    public function __construct()
    {
        $this->db = $this->db_connection();
    }

    public function select(){

        try{

            $sql = "SELECT * FROM spravy WHERE user_id =".$_SESSION['user_id'];
            $query = $this->db->query($sql);
            $sluzba = $query->fetchAll();
            return $sluzba;

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function delete(){
        try{
            $data = array(
                'sprava_id' => $_POST['delete_sprava']
            );
            $query = "DELETE FROM spravy WHERE id = :sprava_id";
            $query_run = $this->db->prepare($query);
            $query_run->execute($data);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}

?>