<?php

class ilmoittautuminen {

    //put your code here

    public static function getIlmoittautujamaara($id) {
        $sql = "select count(knimi) from ilmoittautuminen where ID = ?";
        $kysely = getTietokanta()->prepare($sql);
        $kysely->execute(array($id));
        $tulos = $kysely->fetchColumn();
        return $tulos;
    }

    public static function getIlmoittautuneet($id) {
        $sql = "select knimi from ilmoittautuminen where ID = ?";
        $kysely = getTietokanta()->prepare($sql);
        $kysely->execute(array($id));
        $tulos = $kysely->fetchAll();

        foreach ($tulos as $ilmoittautunut) {
            $ilmoittautuneet[] = $ilmoittautunut["knimi"];
        }

        return $ilmoittautuneet;
    }
    
    public static function tarkistaIlmoittautuminen($knimi, $id){
        $sql = "select knimi from ilmoittautuminen where knimi=? and id=?";
        $kysely = getTietokanta()->prepare($sql);
        $kysely->execute(array($knimi, $id));
        $tulos = $kysely->fetchObject();
        if ($tulos != null) {
        return TRUE;}
        
        return FALSE;
    }

    public static function setIlmoittautuminen($knimi, $id) {

        if (ilmoittautuminen::tarkistaIlmoittautuminen($knimi,$id)) {
            return false;
        }
            $sql = "insert into ilmoittautuminen(ID,knimi) values (?,?)";
            $kysely = getTietokanta()->prepare($sql);
            $kysely->execute(array($id, $knimi));
            return true;
        }

    public static function deleteIlmoittautuminen($knimi, $id) {
        if (ilmoittautuminen::tarkistaIlmoittautuminen($knimi,$id)) { 
            $sql = "delete from ilmoittautuminen where ID=? and knimi=?";
            $kysely = getTietokanta()->prepare($sql);
            $kysely->execute(array($id, $knimi));
            return TRUE;
        }
            
            return false;
        }
    }


    