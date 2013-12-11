<?php
require_once 'libs/common.php';
require_once 'libs/tietokanta.php';
require_once 'libs/models/kayttaja.php';

onKirjautunut();
onPaakayttaja();

if (isset($_POST['kayttaja'])) {
    Kayttaja::deleteKayttaja($_POST['kayttaja']);
}

header("Location: kayttajamuokkaa.php");