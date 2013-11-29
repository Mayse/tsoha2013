<?php
require_once 'libs/common.php';
require_once 'libs/tietokanta.php';
require_once 'libs/models/saunavuoro.php';

onKirjautunut();

$id = $_POST["id"];

$saunavuoro = saunavuoro::getSaunavuoro($id);

$snimi = $saunavuoro->getNimi();
$alkuaika = $saunavuoro->getAlkuaika();
$loppuaika = $saunavuoro->getLoppuaika();


$sivu = "views/muokkaavuoroa.php";
require_once 'views/pohja.php';
?>
