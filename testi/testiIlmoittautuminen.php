<?php
require_once '../libs/common.php';
require_once '../libs/tietokanta.php';
require_once '../libs/models/ilmoittautuminen.php';

$id = "1";
$luku = ilmoittautuminen::getIlmoittautujamaara($id);
echo $luku;