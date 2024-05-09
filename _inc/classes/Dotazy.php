<?php

class Dotazy extends Databaza
{
    private $db;

    public function __construct()
    {
        $this->db = $this->db_connection();
    }

    public function select(){

        try{

            $sql = "SELECT * FROM dotazy";
            $query = $this->db->query($sql);
            $dotaz = $query->fetchAll();
            return $dotaz;

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function delete(){
        try{
            $data = array(
                'dotaz_id' => $_POST['delete_dotaz']
            );
            $query = "DELETE FROM dotazy WHERE id = :dotaz_id";
            $query_run = $this->db->prepare($query);
            $query_run->execute($data);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}

?>