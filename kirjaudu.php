<?php

require_once 'libs/common.php';
require_once 'libs/tietokanta.php';
require_once 'libs/models/kayttaja.php';


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
$kayttajanimi = $_POST["kayttajanimi"];
$kayttaja = Kayttaja::getKayttaja($kayttajanimi, $salasana);


/* Tarkistetaan mallilta onko parametrina saatu oikeat tunnukset */
if ($kayttaja != null) {
    /* Jos tunnus on oikea, lisätään istunto ja ohjataan saunalistaan */
    $_SESSION['kirjautunut'] = $kayttaja;
    header('Location: saunavuorot.php');
} else {
    /* Väärän tunnuksen syöttänyt saa eteensä lomakkeen ja virheen.
     * Tässä käytetään omalta yläluokalta perittyjä yleiskäyttöisiä metodeja.
     */
    naytaNakyma("views/kirjautuminen.php", array(
        'virhe' => "Kirjautuminen ei onnistunut. Käyttäjänimi tai salasana väärin",
    ));
}