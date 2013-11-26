<?php

class saunavuoro {

    private $snimi;
    private $alkuaika;
    private $loppuaika;
    private $ID;

    public static function getSaunavuoro($ID) {
        $sql = "SELECT ID, snimi, alkuaika, loppuaika from saunavuoro where ID = ?";
        $kysely = getTietokanta()->prepare($sql);
        $kysely->execute(array($ID));

        $tulos = $kysely->fetchObject();
        if ($tulos == null) {
            return null;
        } else {
            $sauna = new saunavuoro();
            /* Käytetään PHP:n vapaamielistä muuttujamallia olion
              kenttien asettamiseen */
            foreach ($tulos as $kentta => $arvo) {
                $sauna->$kentta = $arvo;
            }
            return $sauna;
        }
    }

//palauttaa vuorot jotka eivät ole vielä päättyneet
    public static function getSaunavuorot() {
        $sql = "select ID, snimi, alkuaika, loppuaika from saunavuoro where loppuaika>now()";
        $kysely = getTietokanta()->prepare($sql);
        $kysely->execute();

        $tulokset = array();

        foreach ($kysely->fetchAll() as $tulos) {
            $vuoro = new saunavuoro();
            foreach ($tulos as $kentta => $arvo) {
                $vuoro->$kentta = $arvo;
            }
            $tulokset[] = $vuoro;
        }
        return $tulokset;
    }

    public function getNimi() {
        return $this->snimi;
    }

    public function getAlkuaika() {
        return $this->alkuaika;
    }

    public function getLoppuaika() {
        return $this->loppuaika;
    }

    public function getID() {
        return $this->ID;
    }

}