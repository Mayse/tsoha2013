<?php

require_once 'libs/common.php';

if (empty($_POST["kayttajanimi"]) && empty($_POST["salasana"])) {
    naytaNakyma("views/kirjautuminen.php", array(
        'virhe' => "Kirjautuminen epäonnistui! Antamasi käyttäjänimi ja salasana ovat tyhjä.",
    ));
} elseif (empty($_POST["kayttajanimi"])) {
    naytaNakyma("views/kirjautuminen.php", array(
        'virhe' => "Kirjautuminen epäonnistui! Antamasi käyttäjänimi on tyhjä.",
    ));
} elseif (empty($_POST["salasana"])) {
    naytaNakyma("views/kirjautuminen.php", array(
        "virhe" => "Kirjautuminen epäonnistui! Antamasi salasana on tyhjä.",
    ))
    ;
}

 $salasana = $_POST["salasana"];
 $kayttaja = $_POST["kayttajanimi"];