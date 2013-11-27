<?php
require_once 'libs/common.php';
require_once 'libs/tietokanta.php';
require_once 'libs/models/ilmoittautuminen.php';

$id = $_POST["id"];
$kayttaja = $_SESSION['kirjautunut'];
$knimi = $kayttaja->getNimi();
var_dump($knimi);




?>
