<?php
require_once '../libs/common.php';
require_once '../libs/tietokanta.php';
require_once '../libs/models/kayttaja.php';

 $user1 = kayttaja::getKayttaja("saunoja1", "salasana");
 echo $user1->getNimi();
 ?><br><?php
 if ($user1->getPaakayttaja()) {
    echo "on pääkäyttäjä";
}
 ?><br><?php

 $user2 = Kayttaja::getKayttaja("saunoja2", "salasana");
 echo $user2->getNimi();
 ?><br><?php
if ($user2->getPaakayttaja()) {
    echo "on pääkäyttäjä";
}

