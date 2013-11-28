<?php
require_once 'libs/common.php';
require_once 'libs/models/saunavuoro.php';
require_once 'libs/models/sauna.php';
require_once 'libs/models/ilmoittautuminen.php';
require_once 'libs/tietokanta.php';

onKirjautunut();


$id = $_GET["id"];
$snimi = saunavuoro::getSaunavuoro($id)->getNimi();
$sijainti = Sauna::getSauna($snimi)->getSijainti();

//$id = "1"; //staattinen placeholder
$ilmoittautuneet = ilmoittautuminen::getIlmoittautuneet($id);
$sivu = 'views/ilmoittautuminen.php';
require 'views/pohja.php';

