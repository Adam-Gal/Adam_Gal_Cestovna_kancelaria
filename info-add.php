<?php
    include_once ('partials/head.php');
    include_once ('partials/header.php');

    if(!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']){
        header('Location: 404.php');
    }

    $contact_object = new Kontakty();
    $destinacia_object = new Destinacie();

    if (isset($_POST["add_contact"])) {
        $edit_contact_id = $_POST["add_contact"];
        require('partials/kontakt-add.php');
    }

    if (isset($_POST['pridat_contact'],$_POST['adresat'], $_POST['email'], $_POST['tel_c'])) {
        $contact_object->vlozit();
        header('Location: admin.php');
        exit();
    }

    if (isset($_POST["add_destinacia"])) {
        $edit_destinacia_id = $_POST["add_destinacia"];
        require('partials/destinacia-add.php');
    }

    if (isset($_POST['pridat_destinaciu'],$_POST['destinacia'], $_POST['fotka'], $_POST['cena1'], $_POST['cena2'], $_POST['cena3'], $_POST['cena4'], $_POST['cena5'])) {
        $destinacia_object->vlozit();
        header('Location: admin.php');
        exit();
}
?>

