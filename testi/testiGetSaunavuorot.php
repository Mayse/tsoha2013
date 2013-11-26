<?php
require_once '../libs/common.php';
require_once '../libs/tietokanta.php';
require_once '../libs/models/saunavuoro.php';

$vuorot = saunavuoro::getSaunavuorot();
var_dump($vuorot);
?><br>
//<?php
//$ID = "2";
//$vuoro = saunavuoro::getSaunavuoro($ID);
// var_dump($vuoro);
   