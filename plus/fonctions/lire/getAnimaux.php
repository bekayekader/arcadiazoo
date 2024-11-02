<?php

///////////// liste des aniamaux
function getAnimaux($type = "all", $argument = [])
{
   global $pdo;
   $resultatTraite = [
      "infos" => "...",
      "result" => false,
      "data" => [],
   ];

   if ($type == "all")
      $sql = "SELECT * FROM `animal`";

   if ($type == "solo")
      $sql = "SELECT animal.prenom, animal.id, animal.race, habitat.nom AS maison,habitat.slug AS slug_maison, animal.slug, visualiser FROM `animal` JOIN habitat ON animal.habitat_id = habitat.id WHERE animal.slug = :main";

   if ($type == "habitat") // les animaux d'un habitat
      $sql = "SELECT * FROM `animal` WHERE habitat_id = :main";


   $sql = $pdo->prepare($sql);

   try {
      $sql->execute($argument);

   } catch (\Throwable $th) {
      $resultatTraite['infos'] = $th->getMessage();
      return $resultatTraite;
   }

   while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
      $resultatTraite["data"][] = $row;
   }
   $resultatTraite['result'] = true;
   return $resultatTraite;
}