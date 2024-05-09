<?php

class Kontakty extends Databaza
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

    public function vlozit(){
        if($this->db){
            if(isset($_POST['odoslane'])){
                $data = array('contact_name'=>$_POST['meno'],
                    'contact_email'=>$_POST['email'],
                    'contact_message'=>$_POST['text'],
                    'contact_acceptance'=>$_POST['potvrdenie'],
                );

                try{

                    $query = "INSERT INTO dotazy (meno, email, text, potvrdenie) 
                      VALUES (:contact_name, :contact_email, :contact_message, :contact_acceptance)";
                    $query_run = $this->db->prepare($query);
                    $query_run->execute($data);

                }catch(PDOException $e){

                    echo $e->getMessage();
                }


            }else if(isset($_POST['pridat_contact'])){
                $data = array('contact_adresat'=>$_POST['adresat'],
                    'contact_email'=>$_POST['email'],
                    'contact_tel_c'=>$_POST['tel_c'],
                );

                try{

                    $query = "INSERT INTO kontakty (adresat, email, tel_c) 
                      VALUES (:contact_adresat, :contact_email, :contact_tel_c)";
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
                'contact_id' => $_POST['delete_contact']
            );
            $query = "DELETE FROM kontakty WHERE id = :contact_id";
            $query_run = $this->db->prepare($query);
            $query_run->execute($data);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function edit($contact_id, $new_data){
        try{
            // Zostavenie dát pre aktualizáciu
            $data = array(
                'contact_id' => $contact_id,
                'contact_adresat' => $new_data['adresat'], // Predpokladáme, že máme pole $new_data s novými údajmi
                'contact_email' => $new_data['email'],
                'contact_tel_c' => $new_data['tel_c']
            );

            $query = "UPDATE kontakty SET adresat = :contact_adresat, email = :contact_email, tel_c = :contact_tel_c WHERE id = :contact_id";
            $query_run = $this->db->prepare($query);
            $query_run->execute($data);


        }catch(PDOException $e){
            // Spracovanie chyby, ak nastane
            echo $e->getMessage();
        }
    }
    public function select_single($contact_id){
        try {
            $data = array('contact_id'=>$contact_id);
            $query = "SELECT * FROM kontakty WHERE id = :contact_id";
            $query_run = $this->db->prepare($query);
            $query_run->execute($data);

            $contact_data = $query_run->fetch();

            return $contact_data;

        }catch(PDOException $e) {

            echo $e->getMessage();

        }
    }
}

?>