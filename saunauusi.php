<?php
require_once 'libs/common.php';
require_once 'libs/tietokanta.php';
require_once 'libs/models/sauna.php';

onKirjautunut();
onPaakayttaja();

$sivu = "views/saunauusi.php";
require_once 'views/pohja.php';

if (!empty($_POST['nimi']) && !empty($_POST['sijainti']) && !empty($_POST['koko'])) {
    
$nimi = $_POST['nimi'];
$sijainti = $_POST['sijainti'];
$koko = $_POST['koko'];

Sauna::setSauna($nimi,$sijainti,$koko);
}
