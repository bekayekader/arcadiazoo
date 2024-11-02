<?php

///////////// liste des services
function getAnimaux($type = "all", $argument = [])
{
   global $pdo;
   $resultatTraite = [
      "infos" => "...",
      "result" => false,
      "data" => [],
   ];

   if ($type == "all")
      $sql = "SELECT animal.id AS id, prenom, race, animal.slug, animal.image, visualiser  FROM `animal` JOIN habitat ON animal.habitat_id = habitat.id";

   if ($type == "solo")
      $sql = "SELECT animal.id AS id, prenom, race, animal.slug, animal.image, visualiser  FROM `animal` JOIN habitat ON animal.habitat_id = habitat.id WHERE animal.id = :main ";


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