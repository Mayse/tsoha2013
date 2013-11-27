<?php
class Sauna {
    private $snimi;
    private $sijainti;
    private $koko;
    
    public static function getSauna($annettunimi) {
    $sql = "SELECT snimi, sijainti, koko from sauna where snimi = ?";
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
  
  public function getNimi() {
      return $this->snimi;
  }

  public function getSijainti() {
      return $this->sijainti;
  }

  public function getKoko() {
      return $this->koko;
  }


   
}
