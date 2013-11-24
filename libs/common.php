<?php
session_start();
function naytaNakyma($sivu, $data = array()) {
    $data = (object) $data;
    require 'views/pohja.php';
    exit();
}
function onKirjautunut(){
    if (!empty($_SESSION['kirjautunut'])) {
        return (boolean) TRUE;
    }
    header("Location: kirjautuminen.php");
    return (boolean) FALSE;
}