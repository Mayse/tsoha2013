<?php

class ilmoittautuminen {
    //put your code here
    
    public static function getIlmoittautujamaara($id){
        $sql = "select count(knimi) from ilmoittautuminen where id = ?";
        $kysely = getTietokanta()->prepare($sql);
        $kysely->execute(array($id));
        $tulos = $kysely->fetchColumn();
        return $tulos;
    }

    public static function getIlmoittautuneet($id) {
        $sql = "select knimi from ilmoittautuminen where id = ?";
        $kysely = getTietokanta()->prepare($sql);
        $kysely->execute(array($id));
        $tulos = $kysely->fetchAll();
        
        foreach ($tulos as $ilmoittautunut) {
            $ilmoittautuneet[]=$ilmoittautunut["knimi"];
        }
        
        return $ilmoittautuneet;
    }
    
    public static function setIlmoittautuminen($knimi,$id){
        
        return false;
    }

}
