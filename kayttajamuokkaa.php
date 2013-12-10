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


//jos postissa on saunoja niin poistetaan kaikki saunat ja lisätätään takaisin rastitetut saunat, onko tässä mitään järkeä
if (!empty($_POST[0])) {
    omistaja::purgeOmistaja($_GET['kayttaja']);
}
    

for ($i; $i>0; $i--){
        
            $snimi = $_POST[$i];
            $knimi = $_GET['kayttaja'];
            omistaja::setOmistaja($snimi, $knimi);
          
        }
        