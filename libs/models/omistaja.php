<?php

class omistaja {
    
    
    public static function omistaakoSaunoja($knimi){
        $sql = "select * from omistaja where knimi=?";
        $kysely = getTietokanta()->prepare($sql);
        $kysely->execute(array($knimi));
        $tulos = $kysely->fetchObject();
        if ($tulos==NULL) {
            return false;
        }
        return true;
    }
    
    public static function omistaakoSaunan($knimi,$snimi){
        $sql = "select * from omistaja where knimi=? and snimi=?";
        $kysely = getTietokanta()->prepare($sql);
        $kysely->execute(array($knimi,$snimi));
        $tulos = $kysely->fetchObject();
        if ($tulos==NULL) {
            return false;
        }
        return true;
    }

    public static function getOmistetut($knimi) {
        $sql = "select snimi from omistaja where knimi=?";
        $kysely = getTietokanta()->prepare($sql);
        
        $kysely->execute(array($knimi));
        $tulokset = $kysely->fetchAll();
        return $tulokset;
               
        }

    public static function setOmistaja($snimi, $knimi) {
        $sql = "INSERT INTO omistaja(snimi,knimi) VALUES (?,?)";
        $kysely = getTietokanta()->prepare($sql);
        $kysely->execute(array($snimi,$knimi));
    }

    public static function purgeOmistaja($knimi) {
        $sql = "DELETE FROM omistaja where knimi=?";
        $kysely = getTietokanta()->prepare($sql);
        $kysely->execute(array($knimi));
    }

}

