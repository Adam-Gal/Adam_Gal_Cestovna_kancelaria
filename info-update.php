<?php
    include_once ('partials/head.php');
    include_once ('partials/header.php');

    if(!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']){
        header('Location: 404.php');
    }

    $contact_object = new Kontakty();
    $destinacia_object = new Destinacie();

    if (isset($_POST["edit_contact"])) {
        $edit_contact_id = $_POST["edit_contact"];
        $contact_data = $contact_object->select_single($edit_contact_id);
        $adresat = $contact_data->adresat;
        $email = $contact_data->email;
        $tel_c = $contact_data->tel_c;
        require('partials/kontakt-edit.php');
    }

    if (isset($_POST['edit_contact_id'], $_POST['adresat'], $_POST['email'], $_POST['tel_c'])) {
        $edit_contact_id = $_POST['edit_contact_id'];
        $new_data = array(
            'adresat' => $_POST['adresat'],
            'email' => $_POST['email'],
            'tel_c' => $_POST['tel_c']
        );

        $contact_object->edit($edit_contact_id, $new_data);

        header('Location: admin.php');
        exit();
    }

    if (isset($_POST["edit_destinacia"])) {
        $edit_destinacia_id = $_POST["edit_destinacia"];
        $destinacia_data = $destinacia_object->select_single($edit_destinacia_id);
        $destinacia = $destinacia_data->destinacia;
        $fotka = $destinacia_data->fotka;
        $cena1 = $destinacia_data->cena1;
        $cena2 = $destinacia_data->cena2;
        $cena3 = $destinacia_data->cena3;
        $cena4 = $destinacia_data->cena4;
        $cena5 = $destinacia_data->cena5;
        require('partials/destinacia-edit.php');
    }

    if (isset($_POST['edit_destinacia_id'], $_POST['destinacia'], $_POST['fotka'], $_POST['cena1'], $_POST['cena2'], $_POST['cena3'], $_POST['cena4'], $_POST['cena5'])) {
        $edit_destinacia_id = $_POST['edit_destinacia_id'];
        $new_data = array(
            'destinacia' => $_POST['destinacia'],
            'fotka' => $_POST['fotka'],
            'cena1' => $_POST['cena1'],
            'cena2' => $_POST['cena2'],
            'cena3' => $_POST['cena3'],
            'cena4' => $_POST['cena4'],
            'cena5' => $_POST['cena5']
        );

        $destinacia_object->edit($edit_destinacia_id, $new_data);
        header('Location: admin.php');
        exit();
    }
?>

