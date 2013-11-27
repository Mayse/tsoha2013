<?php
require_once '../libs/common.php';
require_once '../libs/tietokanta.php';
require_once '../libs/models/saunavuoro.php';

$vuorot = saunavuoro::getSaunavuorot();
var_dump($vuorot);
?><br>
//<?php
//$id = "2";
//$vuoro = saunavuoro::getSaunavuoro($id);
// var_dump($vuoro);
   