<?php
session_start();

function naytaNakyma($sivu, $data = array()) {
    $data = (object) $data;
    require 'views/pohja.php';
    exit();
}

//Palauttaa true kirjautuneesta istunnosta, 
//mikäli kirjautunutta käyttäjää ei ole asetettu 
//palauttaa false ja ohjaa kirjautumisivulle
function onKirjautunut(){
    if (!empty($_SESSION['kirjautunut'])) {
        return (boolean) TRUE;
    }
    header("Location: kirjautuminen.php");
    return (boolean) FALSE;
}

function kirjaaUlos(){
      unset($_SESSION['kirjautunut']);

}