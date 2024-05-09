<?php
include_once('partials/head.php');
include_once('partials/header.php');
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] && $_SESSION['is_admin']) {
    header('Location: admin.php');
}
else if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] && !$_SESSION['is_admin']){
    header('Location: inbox.php');
}
?>
<br><br><br><br><br><br>
    <main>
      <section class="container" style="margin-bottom: 10cap">
        <style> body { background: linear-gradient( rgba(3,124,166,1) 0%, rgba(38,129,208,1) 60%, rgba(0,212,255,1) 100%);} </style>
        <div class="text-center">
            <div class="text-end">
                <a href="register.php" class="btn btn-danger" style="margin-bottom: 15px">Registovať</a>
            </div>
            <h1 class="text-center" style="margin-bottom: 35px; font-size: 5cap; font-weight: bolder; display: flex; justify-content: center">Prihlásenie</h1>
        </div>
        <form action="" method="POST" style="display: grid; justify-content: inherit; margin-left: 20%; margin-right: 20%;">
            <input type="email" name="email" placeholder=" Váš email" style="margin-top: 15px; margin-bottom: 15px; height: 35px; border-radius: 10px; border-style: none;">
            <input type="text" name="password" placeholder=" Vaše heslo" style="margin-top: 15px; margin-bottom: 15px; height: 35px; border-radius: 10px; border-style: none;">
            <input type="submit" value="Odoslať" name="user_login" style=" margin-top: 15px; width: 50%; margin-left: 25%; margin-right: 25%; height: 35px; border-radius: 15px; border-style: none;">
        </form>
        <?php
            if(isset($_POST['user_login'])){
                $email = $_POST['email'];
                $password = $_POST['password'];

                $user_object = new Pouzivatel();

                $login_success = $user_object->login($email,$password);
                //ak metóda vráti TRUE
                if($login_success && $_SESSION['is_admin']){
                    header('Location: admin.php');
                    die;
                }
                else if($login_success && !$_SESSION['is_admin']){
                    header('Location: inbox.php');
                    die;
                }else{
                    echo '<p class="text-center" style="margin-top: 30px; padding: 15px; border-radius: 10px; background-color: red; width: 30%; margin-left: 35%; margin-right: 35%; color: white">Nesprávne meno alebo heslo</p>';
                }

            }
        
        ?>
      </section>
    </main>
    
<?php
    include_once('partials/footer.php')
?> 