<?php
//session_start();
ob_start();
date_default_timezone_set('UCT');
$bdd_name = "arcadia_zoo";

$moi_meme = [
  "nom" => "ARCADIA ADMIN",
  "description" => "Administration de Arcadia",
  "url" => "arcadia/administration",
  "titre" => "accueil",
  "keywords" => "",
];




include('fonctions.php'); ///////// fonctions

require_once('variables.php'); // Variables
require_once('pages.php'); // pages
require_once('composants.php'); // composants