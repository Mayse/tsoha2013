<?php
require_once 'libs/common.php';
require_once 'libs/models/saunavuoro.php';
require_once 'libs/models/sauna.php';
require_once 'libs/models/ilmoittautuminen.php';
require_once 'libs/tietokanta.php';

onKirjautunut();

$vuorot = saunavuoro::getSaunavuorot();
$sivu = 'views/saunavuorot.php';
require 'views/pohja.php';