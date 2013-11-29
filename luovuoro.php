<?php
require_once 'libs/common.php';
require_once 'libs/tietokanta.php';
require_once 'libs/models/omistaja.php';
require_once 'libs/models/saunavuoro.php';

onKirjautunut();

$knimi = getKnimi();
$saunat = omistaja::getOmistetut($knimi);

$sivu = "views/luovuoro.php";
require "views/pohja.php";

if (isset($_POST['sauna']) && isset($_POST['alkuaika']) && isset($_POST['loppuaika'])) {
    $snimi = $_POST['sauna'];
    $alkuaika = $_POST['alkuaika'];
    $loppuaika = $_POST['loppuaika'];
    saunavuoro::setSaunavuoro($snimi, $alkuaika, $loppuaika);
    header("Location: saunavuorot.php");
}