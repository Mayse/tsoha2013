<?php

class saunavuoro {

    private $snimi;
    private $alkuaika;
    private $loppuaika;
    private $ID;

    public static function getSaunavuoro($id) {
        $sql = "SELECT ID, snimi, alkuaika, loppuaika from saunavuoro where ID = ?";
        $kysely = getTietokanta()->prepare($sql);
        $kysely->execute(array($id));

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
        $sql = "select ID, snimi, alkuaika, loppuaika from saunavuoro where loppuaika > now() order by alkuaika";
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
    
    public static function onkoTaynna($id){
        $ilmoittautujamaara = ilmoittautuminen::getIlmoittautujamaara($id);
        $koko = sauna::getSauna(saunavuoro::getSaunavuoro($id)->getNimi())->getKoko(); //send halp!
        if ($ilmoittautujamaara>=$koko) {
            return TRUE;
        }
        return FALSE;
        
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

    public function getId() {
        return $this->ID;
    }

    public static function setSaunavuoro($snimi,$alkuaika,$loppuaika){
        $sql = "insert into saunavuoro(snimi,alkuaika,loppuaika) values (?,?,?)";
        $kysely = getTietokanta()->prepare($sql);
        $kysely->execute(array($snimi,$alkuaika,$loppuaika));
    }

    public static function updateSaunavuoro($id, $alkuaika, $loppuaika) {
        $sql = "UPDATE saunavuoro SET alkuaika=?, loppuaika=? WHERE ID=?";
        $kysely = getTietokanta()->prepare($sql);
        $kysely->execute(array($alkuaika,$loppuaika,$id));   
    }

    public static function deleteSaunavuoro($id) {
        $sql = "DELETE from saunavuoro where id=?";
        $kysely = getTietokanta()->prepare($sql);
        $kysely->execute(array($id));
    }
}
