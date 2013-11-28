<?php
require_once 'libs/common.php';
require_once 'libs/tietokanta.php';
require_once 'libs/models/ilmoittautuminen.php';

//var_dump($_SESSION);
$id = $_POST["id"];
$knimi = $_SESSION['kirjautunut']->getNimi();

ilmoittautuminen::setIlmoittautuminen($knimi, $id);
$paluu = "ilmoittautuminen.php?id=" . $id;
header("Location: $paluu");




