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

if (isset($_POST['sauna']) && isset($_POST['alkupaiva']) && isset($_POST['alkukello']) && isset($_POST['loppupaiva']) && isset($_POST['loppukello'])) {
    $snimi = $_POST['sauna'];
    $alkupaiva = $_POST['alkupaiva'];
    $alkukello = $_POST['alkukello'];
    $alkuaika = $alkupaiva . " " . $alkukello;
    $loppupaiva = $_POST['loppupaiva'];
    $loppukello = $_POST['loppukello'];
    $loppuaika = $loppupaiva . " " . $loppukello;

    saunavuoro::setSaunavuoro($snimi, $alkuaika, $loppuaika);
    header("Location: saunavuorot.php");
    var_dump($alkuaika);
}