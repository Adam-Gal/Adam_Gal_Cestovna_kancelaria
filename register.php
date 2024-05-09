<?php
    include_once('partials/head.php');
    include_once('partials/header.php');

    $user_object = new Pouzivatel();
    $sprava = "";

    if (isset($_POST['user_register'], $_POST['email'], $_POST['password'], $_POST['confirm_password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if ($password === $confirm_password) {
            if ($user_object->register($email, $password)) {
                header('Location: login.php');
            }
            else {
                $sprava = "Registracia zlyhala";
            }
        }
        else {
            $sprava = "Heslá sa nezhodujú";
        }
    }
?>
<br><br><br><br><br><br>
    <main>
      <section class="container" style="margin-bottom: 10cap">
        <style> body { background: linear-gradient( rgba(3,124,166,1) 0%, rgba(38,129,208,1) 60%, rgba(0,212,255,1) 100%);} </style>
        <h1 style="margin-bottom: 35px; font-size: 5cap; font-weight: bolder; display: flex; justify-content: center">Registrácia</h1>
        <form action="" method="POST" style="display: grid; justify-content: inherit; margin-left: 20%; margin-right: 20%;">
            <input type="email" name="email" placeholder=" Váš email" style="margin-top: 15px; margin-bottom: 15px; height: 35px; border-radius: 10px; border-style: none;" required>
            <input type="password" name="password" placeholder=" Vaše heslo" style="margin-top: 15px; margin-bottom: 15px; height: 35px; border-radius: 10px; border-style: none;" required>
            <input type="password" name="confirm_password" placeholder=" Zopakujte heslo" style="margin-top: 15px; margin-bottom: 15px; height: 35px; border-radius: 10px; border-style: none;" required>
            <input type="submit" value="Registrovať" name="user_register" style=" margin-top: 15px; width: 50%; margin-left: 25%; margin-right: 25%; height: 35px; border-radius: 15px; border-style: none;">
        </form>
        <?php if ($sprava != "") echo '<p class="text-center" style="margin-top: 30px; padding: 15px; border-radius: 10px; background-color: red; width: 30%; margin-left: 35%; margin-right: 35%; color: white">'.$sprava.'</p>'; ?>
      </section>
    </main>
    
<?php
    include_once('partials/footer.php')
?> 