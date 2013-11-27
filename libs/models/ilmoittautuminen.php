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
    
}
