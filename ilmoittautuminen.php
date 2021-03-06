<?php
require_once 'libs/common.php';
require_once 'libs/models/saunavuoro.php';
require_once 'libs/models/sauna.php';
require_once 'libs/models/ilmoittautuminen.php';
require_once 'libs/tietokanta.php';
require_once 'libs/models/omistaja.php';

onKirjautunut();


$id = $_GET["id"];
$vuoro = saunavuoro::getSaunavuoro($id);
$snimi = $vuoro->getNimi();
$knimi = getKnimi();
$alkuaika = $vuoro->getAlkuaika();
$loppuaika = $vuoro->getLoppuaika();
$sijainti = Sauna::getSauna($snimi)->getSijainti();
$taynna = $vuoro->onkoTaynna($id);

$ilmoittautuneet = ilmoittautuminen::getIlmoittautuneet($id);
$sivu = 'views/ilmoittautuminen.php';
require 'views/pohja.php';

