<?php
require_once '../libs/common.php';
require_once '../libs/tietokanta.php';
require_once '../libs/models/saunavuoro.php';

$ID = "2";
$vuoro = saunavuoro::getSaunavuoro($ID);
 var_dump($vuoro);
   
 $nimi = $vuoro->getNimi();