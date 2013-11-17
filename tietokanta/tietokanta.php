<?php

    //put your code here
    //Yleinen muoto
$tunnus = "root";
$salasana= "saunakanta";
$db= "saunakanta";
$yhteys = new PDO("mysql:unix_socket=/home/miikasay/mysql/socket;dbname=$db", $tunnus, $salasana);
//Seuravaa komento pyytää PDO:ta tuottamaan poikkeuksen aina kun jossain on virhe.
//Kannattaa käyttää, oletuksena luokka ei raportoi virhetiloja juuri mitenkään!
$yhteys->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


?>
