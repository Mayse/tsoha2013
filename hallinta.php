<?php

require_once 'libs/common.php';
require_once 'libs/tietokanta.php';
require_once 'libs/models/kayttaja.php';

onKirjautunut();
onPaakayttaja();

$sivu = 'views/hallinta.php';
require 'views/pohja.php';