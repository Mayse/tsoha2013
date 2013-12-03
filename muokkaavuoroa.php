<?php
require_once 'libs/common.php';
require_once 'libs/tietokanta.php';
require_once 'libs/models/saunavuoro.php';

onKirjautunut();

if (!empty($_GET["action"]) && $_GET["action"]=="update") {
    $alkuaika = $_GET["alkamisaika"];
    $loppuaika = $_GET["loppumisaika"];
    $id = $_GET["id"];
    saunavuoro::updateSaunavuoro($id,$alkuaika,$loppuaika);
}

if (!empty($_GET["action"]) && $_GET["action"]=="delete") {
    $id = $_GET["id"];
    saunavuoro::deleteSaunavuoro($id);
}

if (!empty($_POST["id"])) {
$id = $_POST["id"];
}
else{

    header("Location: saunavuorot.php");
    exit();
}



$saunavuoro = saunavuoro::getSaunavuoro($id);

$snimi = $saunavuoro->getNimi();
$alkuaika = $saunavuoro->getAlkuaika();
$loppuaika = $saunavuoro->getLoppuaika();


$sivu = "views/muokkaavuoroa.php";
require_once 'views/pohja.php';


?>
