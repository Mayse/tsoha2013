<?php

/**
 * Description of sauna
 *
 * @author miikas
 */
class Sauna {
    private $nimi;
    private $sijainti;
    private $koko;
    
    public static function getSauna($annettunimi) {
    $sql = "SELECT snimi, sijainti, koko from sauna where snimi = ? AND sijainti = ? AND ?";
    $kysely = getTietokanta()->prepare($sql);
    $kysely->execute(array($annettunimi));

    $tulos = $kysely->fetchObject();
    if ($tulos == null) {
      return null;
    } else {
      $sauna = new Sauna(); 
      /* Käytetään PHP:n vapaamielistä muuttujamallia olion
         kenttien asettamiseen */
      foreach($tulos as $kentta => $arvo) {
        $sauna->$kentta = $arvo;
      }
      return $sauna;
    }
  }
    //put your code here
}
