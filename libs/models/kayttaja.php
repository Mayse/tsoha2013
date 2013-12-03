<?php
class Kayttaja {
  
  private $knimi;
  private $salasana;
  private $paakayttaja;






  public static function getKayttaja($annettuknimi, $annettuSalasana) {
    $sql = "SELECT knimi, salasana, paakayttaja from kayttaja where knimi = ? AND salasana = ?";
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
  
  public function getNimi(){
      return $this->knimi;
  }
  
  //returnina 0 tai 1
  public function getPaakayttaja() {
      return $this->paakayttaja;
  }
}