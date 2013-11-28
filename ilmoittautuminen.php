<?php
require_once 'libs/common.php';
require_once 'libs/models/saunavuoro.php';
require_once 'libs/models/sauna.php';
require_once 'libs/models/ilmoittautuminen.php';
require_once 'libs/tietokanta.php';

onKirjautunut();


$id = $_GET["id"];
$vuoro = saunavuoro::getSaunavuoro($id);
$snimi = $vuoro->getNimi();
$alkuaika = $vuoro->getAlkuaika();
$loppuaika = $vuoro->getLoppuaika();
$sijainti = Sauna::getSauna($snimi)->getSijainti();
$taynna = $vuoro->onkoTaynna($id);


//$id = "1"; //staattinen placeholder
$ilmoittautuneet = ilmoittautuminen::getIlmoittautuneet($id);
$sivu = 'views/ilmoittautuminen.php';
require 'views/pohja.php';

