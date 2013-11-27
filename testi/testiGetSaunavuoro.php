<?php
require_once '../libs/common.php';
require_once '../libs/tietokanta.php';
require_once '../libs/models/saunavuoro.php';

$id = "2";
$vuoro = saunavuoro::getSaunavuoro($id);
 var_dump($vuoro);
   
 $nimi = $vuoro->getNimi();