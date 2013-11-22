<?php
require_once 'libs/common.php';
  if (isset($_POST["kayttajanimi"])) {
    naytaNakymä("kirjautuminen.php", array(
      'virhe' => "Kirjautuminen epäonnistui! Antamasi käyttäjänimi on tyhjä.", ));
  header('Location: saunavuorot.php');
    
  }

  

?>
