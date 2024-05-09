<?php

const DATABASE = [
    'HOST' => 'localhost',
    'DBNAME' => 'cestovna_kancelaria_vias',
    'USER_NAME' => 'root',
    'PASSWORD' => ''
];

require_once('classes/Databaza.php');
require_once('classes/Stranka.php');
require_once('classes/Special.php');
require_once('classes/Novinky.php');
require_once('classes/Destinacie.php');
require_once('classes/Sluzby.php');
require_once('classes/Kontakty.php');
require_once('classes/Menu.php');
require_once('classes/Pouzivatel.php');
require_once('classes/Spravy.php');
require_once('classes/Dotazy.php');

session_start()
?>