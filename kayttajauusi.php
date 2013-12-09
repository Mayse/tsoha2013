<?php

require_once 'libs/common.php';
require_once 'libs/tietokanta.php';
require_once 'libs/models/sauna.php';
require_once 'libs/models/kayttaja.php';

onKirjautunut();
onPaakayttaja();

$saunat = Sauna::getSaunat();

$sivu = "views/kayttajauusi.php";
require_once 'views/pohja.php';

//jos on syötetty tietoja niin lisätään käyttäjä
if (!empty($_POST['nimi']) && !empty($_POST['salasana'])) {
    $nimi = $_POST['nimi'];
    $salasana = $_POST['salasana'];
    $paakayttaja;
    
    if (!empty($_POST['paakayttaja']) && $_POST['paakayttaja'] == "on") {
        $paakayttaja = "1";
    } else {
        $paakayttaja = "0";
    }
    if(Kayttaja::setKayttaja($nimi, $salasana, $paakayttaja)){
        echo lisätty;
}}
