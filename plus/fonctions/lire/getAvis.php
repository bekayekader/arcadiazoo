<?php

///////////// liste des avis
function getAvis($type = "all", $argument = [])
{
   global $pdo;
   $resultatTraite = [
      "infos" => "...",
      "result" => false,
      "data" => [],
   ];

   if ($type == "all")
      $sql = "SELECT * FROM `avis`";

   if ($type == "online") // avis en ligne
      $sql = "SELECT * FROM `avis` WHERE est_valide = 1";


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