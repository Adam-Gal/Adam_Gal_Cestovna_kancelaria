<?php
    require("_inc/functions.php");
?>
<!DOCTYPE html>
<html lang="sk">

<head>
    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Prepojenia a štýly -->
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php
    $page_name = basename($_SERVER["SCRIPT_NAME"], '.php');
    $page_object = new Stranka($page_name);
    $page_object->add_title();
    ?>
</head>