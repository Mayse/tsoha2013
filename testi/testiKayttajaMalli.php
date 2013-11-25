<?php
require_once '../libs/common.php';
require_once '../libs/tietokanta.php';
require_once '../libs/models/kayttaja.php';

 $user = kayttaja::getKayttaja("saunoja1", "salasana");
 echo $user->getNimi();

?>
