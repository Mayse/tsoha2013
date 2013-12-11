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
            foreach ($tulos as $kentta => $arvo) {
                $kayttaja->$kentta = $arvo;
            }
            return $kayttaja;
        }
    }
    
    public static function getKayttajat(){
        $sql = "SELECT knimi from kayttaja";
        $kysely = getTietokanta()->prepare($sql);
        $kysely->execute();
        
        $tulos = $kysely->fetchAll();
        if ($tulos == NULL) {
            return NULL;
        } else {
            $kayttajat = array();
            foreach ($tulos as $iteroitukayttaja) {
                $kayttaja = new Kayttaja();
                foreach ($iteroitukayttaja as $kentta => $arvo) {
                    $kayttaja->$kentta = $arvo;
                }
                $kayttajat[] = $kayttaja;
            }
            return $kayttajat;
        }
    }

    //tarkistuksen puuttuu
    public static function setKayttaja($nimi, $salasana, $paakayttaja) {
        $sql = "INSERT kayttaja (knimi,salasana,paakayttaja) VALUES (?,?,?)";
        $kysely = getTietokanta()->prepare($sql);
        $kysely->execute(array($nimi, $salasana, $paakayttaja));
        return true;
    }
    
    public static function deleteKayttaja($knimi){
        $sql = "DELETE FROM kayttaja WHERE knimi=?";
        $kysely = getTietokanta()->prepare($sql);
        $kysely->execute(array($knimi));
    }

    public static function updateSalasana($knimi,$salasana){
        $sql = "update kayttaja set salasana=? where knimi=?";
        $kysely = getTietokanta()->prepare($sql);
        $kysely->execute(array($salasana,$knimi));
    }

    public function getNimi() {
        return $this->knimi;
    }

    //returnina 0 tai 1
    public function getPaakayttaja() {
        return $this->paakayttaja;
    }

}
