<?php
require_once '../libs/common.php';
require_once '../libs/tietokanta.php';
require_once '../libs/models/sauna.php';
$saunat = Sauna::getSaunat();
//var_dump($saunat);
foreach ($saunat as $sauna){
    echo $sauna->getNimi() . "\n";
}