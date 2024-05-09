<?php

 class Pouzivatel extends Databaza{

    private $db;

    public function __construct()
    {
        $this->db = $this->db_connection();
    }

    public function login($email, $password){
        try{

            $data = array(
                'email'=>$email,
                'heslo'=>md5($password)
            );

            $sql = "SELECT * FROM pouzivatelia WHERE email = :email AND heslo = :heslo";
            $query_run = $this->db->prepare($sql);
            $query_run->execute($data);
            $n_rows = $query_run->rowCount();

            if($n_rows == 1) {
                // login je uspesny
                $user = $query_run->fetch();
                $_SESSION['logged_in'] = true;
                $_SESSION['user_id'] = $user->id;
                $_SESSION['is_admin'] = $user->role;

                return true;
            } else {
                return false;
            }

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

     public function register($email, $password)
     {
         try {
             $hashed_password = $password;

             $data = array(
                 'user_email'=>$email,
                 'user_password'=>md5($hashed_password),
                 'user_role'=>'0'
             );

             $sql = "INSERT INTO pouzivatelia (email, heslo, role) VALUES(:user_email, :user_password, :user_role)";
             $query_run = $this->db->prepare($sql);
             $query_run->execute($data);
             return true;
         }
         catch(PDOException $e){
             echo $e->getMessage();
             return false;
         }
     }
 }
?>