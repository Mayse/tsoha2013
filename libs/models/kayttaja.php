<?php
class Kayttaja {
  
  private $knimi;
  private $salasana;
  
  public static function getKayttaja($annettuknimi, $annettuSalasana) {
    $sql = "SELECT knimi, salasana from kayttaja where knimi = ? AND salasana = ?";
    $kysely = getTietokanta()->prepare($sql);
    $kysely->execute(array($annettuknimi, $annettuSalasana));

    $tulos = $kysely->fetchObject();
    if ($tulos == null) {
      return null;
    } else {
      $kayttaja = new Kayttaja(); 
      /* Käytetään PHP:n vapaamielistä muuttujamallia olion
         kenttien asettamiseen */
      foreach($tulos as $kentta => $arvo) {
        $kayttaja->$kentta = $arvo;
      }
      return $kayttaja;
    }
  }

  /* Tähän muita Käyttäjäluokan metodeita */
}