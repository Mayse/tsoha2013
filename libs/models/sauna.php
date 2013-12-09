<?php

class Sauna {

    private $snimi;
    private $sijainti;
    private $koko;

    //palauttaa yksittäisen saunaolion
    public static function getSauna($annettunimi) {
        $sql = "SELECT snimi, sijainti, koko from sauna where snimi = ?";
        $kysely = getTietokanta()->prepare($sql);
        $kysely->execute(array($annettunimi));

        $tulos = $kysely->fetchObject();
        if ($tulos == null) {
            return null;
        } else {
            $sauna = new Sauna();
            foreach ($tulos as $kentta => $arvo) {
                $sauna->$kentta = $arvo;
            }
            return $sauna;
        }
    }

    //palauttaa arrayn kaikista saunoista
    public static function getSaunat() {
        $sql = "SELECT * FROM sauna";
        $kysely = getTietokanta()->prepare($sql);
        $kysely->execute();

        $tulos = $kysely->fetchAll();
        if ($tulos == NULL) {
            return NULL;
        } else {
            $saunat = array();
            foreach ($tulos as $iteroitusauna) {
                $sauna = new Sauna();
                foreach ($iteroitusauna as $kentta => $arvo) {
                    $sauna->$kentta = $arvo;
                }
                $saunat[] = $sauna;
            }
            return $saunat;
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

    public static function setSauna($snimi, $sijainti, $koko) {
        $sql = "INSERT INTO sauna(snimi,sijainti,koko) VALUES (?,?,?)";
        $kysely = getTietokanta()->prepare($sql);
        $kysely->execute(array($snimi,$sijainti,$koko));
    }

}
