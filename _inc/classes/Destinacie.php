<?php

class Destinacie extends Databaza
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

    public function vlozit(){
        if($this->db){
            if(isset($_POST['pridat_destinaciu'])){
                $data = array('destinacia'=>$_POST['destinacia'],
                    'fotka'=>$_POST['fotka'],
                    'cena1'=>$_POST['cena1'],
                    'cena2'=>$_POST['cena2'],
                    'cena3'=>$_POST['cena3'],
                    'cena4'=>$_POST['cena4'],
                    'cena5'=>$_POST['cena5'],
                );

                try{

                    $query = "INSERT INTO destinacie (destinacia, fotka, cena1, cena2, cena3, cena4, cena5) 
                      VALUES (:destinacia, :fotka, :cena1, :cena2, :cena3, :cena4, :cena5)";
                    $query_run = $this->db->prepare($query);
                    $query_run->execute($data);

                }catch(PDOException $e){

                    echo $e->getMessage();
                }


            }else{
                echo 'Formulár nebol odoslaný';
            }
        }else{
            echo 'Nemám spojenie';
        }
    }

    public function delete(){
        try{
            $data = array(
                'destinacia_id' => $_POST['delete_destinacia']
            );
            $query = "DELETE FROM destinacie WHERE id = :destinacia_id";
            $query_run = $this->db->prepare($query);
            $query_run->execute($data);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function edit($destinacia_id, $new_data){
        try{
            // Zostavenie dát pre aktualizáciu
            $data = array(
                'destinacia_id' => $destinacia_id,
                'destinacia' => $new_data['destinacia'], // Predpokladáme, že máme pole $new_data s novými údajmi
                'fotka' => $new_data['fotka'],
                'cena1' => $new_data['cena1'],
                'cena2' => $new_data['cena2'],
                'cena3' => $new_data['cena3'],
                'cena4' => $new_data['cena4'],
                'cena5' => $new_data['cena5']
            );

            $query = "UPDATE destinacie SET destinacia = :destinacia, fotka = :fotka, cena1 = :cena1, cena2 = :cena2, cena3 = :cena3, cena4 = :cena4, cena5 = :cena5 WHERE id = :destinacia_id";
            $query_run = $this->db->prepare($query);
            $query_run->execute($data);


        }catch(PDOException $e){
            // Spracovanie chyby, ak nastane
            echo $e->getMessage();
        }
    }
    public function select_single($destinacia_id){
        try {
            $data = array('destinacia_id'=>$destinacia_id);
            $query = "SELECT * FROM destinacie WHERE id = :destinacia_id";
            $query_run = $this->db->prepare($query);
            $query_run->execute($data);

            $destinacia_data = $query_run->fetch();

            return $destinacia_data;

        }catch(PDOException $e) {

            echo $e->getMessage();

        }
    }
}

?>