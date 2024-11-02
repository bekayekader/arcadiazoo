<?php

///////////// liste des services
function getServices($type = "all", $argument = [])
{
   global $pdo;
   $resultatTraite = [
      "infos" => "...",
      "result" => false,
      "data" => [],
   ];

   if ($type == "all")
      $sql = "SELECT *  FROM `service`";

   if ($type == "solo")
      $sql = "SELECT *  FROM `service` WHERE id = :main ";


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