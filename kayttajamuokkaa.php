<?php
require_once 'libs/common.php';
require_once 'libs/tietokanta.php';
require_once 'libs/models/kayttaja.php';
require_once 'libs/models/sauna.php';
require_once 'libs/models/omistaja.php';



onKirjautunut();
onPaakayttaja();

$kayttajat = Kayttaja::getKayttajat();
$saunat = Sauna::getSaunat();
$omistetutSaunat = array();
if (!empty($_GET['kayttaja'])) {
    $omistetutSaunat = omistaja::getOmistetut($_GET['kayttaja']);
}

$sivu = "views/kayttajamuokkaa.php";
require_once 'views/pohja.php';

//päivitetään tarvittaessa salasana
if (!empty($_POST['salasana'])) {
    Kayttaja::updateSalasana($_GET['kayttaja'],$_POST['salasana']);
}


if (isset($_POST['i'])) {
//tallenna nappia on painettu, poistetaan kaikki saunat
    omistaja::purgeOmistaja($_GET['kayttaja']);

//ja lisätään ne takaisin.
$i = $_POST['i'];
for ($i; $i>0; $i--){
    if (isset($_POST[$i])) {

            $snimi = $_POST[$i];
            $knimi = $_GET['kayttaja'];
            omistaja::setOmistaja($snimi, $knimi);
            }      
        }
        header("Location: kayttajamuokkaa.php?kayttaja=" . $_GET['kayttaja']); //piirretään sivu uudestaan jotta checkboxit päivittyvät
}        