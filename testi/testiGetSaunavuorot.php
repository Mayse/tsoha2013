<?php
require_once '../libs/common.php';
require_once '../libs/tietokanta.php';
require_once '../libs/models/saunavuoro.php';

$vuorot = saunavuoro::getSaunavuorot();
foreach ($vuorot as $value) {
    echo $value;
}
?>
