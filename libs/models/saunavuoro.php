<?php

class saunavuoro {

    private $nimi;
    private $alkuaika;
    private $loppuaika;

    public static function getSaunavuoro($ID) {
        $sql = "SELECT ID, snimi, alkuaika, loppuaika from sauna where ID = ?";
        $kysely = getTietokanta()->prepare($sql);
        $kysely->execute(array($ID));

        $tulos = $kysely->fetchObject();
        if ($tulos == null) {
            return null;
        } else {
            $sauna = new Sauna();
            /* Käytetään PHP:n vapaamielistä muuttujamallia olion
              kenttien asettamiseen */
            foreach ($tulos as $kentta => $arvo) {
                $sauna->$kentta = $arvo;
            }
            return $sauna;
        }
    }

    //palauttaa vain vuorojen ID:t jotka eivät ole vielä päättyneet
    public static function getSaunavuorot() {
        $sql = "select id from saunavuoro where loppuaika<now()";
        $kysely = getTietokanta()->prepare($sql);
        $kysely->execute();

        $tulos = $kysely->fetchObject();
        if ($tulos == NULL) {
            return NULL;
        }   else {
            return $tulos;
        }
    }

}
