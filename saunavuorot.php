<?php
require_once 'libs/common.php';
require_once 'libs/models/saunavuoro.php';
require_once 'libs/models/sauna.php';
require_once 'libs/models/ilmoittautuminen.php';
require_once 'libs/models/omistaja.php';
require_once 'libs/tietokanta.php';

onKirjautunut();

//haetaan vuorot ja käyttäjä jotta piirretään tarvittaessa uuden vuoron luomispainike
$vuorot = saunavuoro::getSaunavuorot();
$knimi = $_SESSION['kirjautunut']->getNimi();


$sivu = 'views/saunavuorot.php';
require 'views/pohja.php';