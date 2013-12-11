<?php
require_once 'models/kayttaja.php';
session_start();

//kirjautuneen käyttäjän nimi
function getKnimi(){
    return $knimi = $_SESSION['kirjautunut']->getNimi();
}

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
    exit();
    
}

//ohjaa käyttäjän saunavuoronäkymään mikäli ei ole pääkäyttäjä
function onPaakayttaja(){
    if ($_SESSION['kirjautunut']->getPaakayttaja()){
        return (boolean) TRUE;        
    }    
    header("Location: saunavuorot.php");
    exit();
    
}

function kirjaaUlos(){
      unset($_SESSION['kirjautunut']);

}