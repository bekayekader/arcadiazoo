<?php
//session_start();
ob_start();
date_default_timezone_set('UCT');
$bdd_name = "arcadia_zoo";

$moi_meme = [
  "nom" => "Zoo Arcadia",
  "description" => "Le zoo Arcadia, situé près de la légendaire forêt de Brocéliande en Bretagne, France, est un lieu unique qui accueille ses visiteurs depuis 1960. Réputé pour sa diversité animale et son engagement envers la préservation de la faune et de l’environnement, ce zoo est organisé en différents habitats naturels recréant les conditions de vie des animaux : la savane, la jungle, et les marais.",
  "url" => "arcadia",
  "titre" => "Accueil",
  "keywords" => "",
];




include('fonctions.php'); ///////// fonctions

require_once('variables.php'); // Variables
require_once('pages.php'); // pages
require_once('composants.php'); // composants