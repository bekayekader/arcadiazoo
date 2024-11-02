<?php

///////////// horaires
function getHoraires()
{
   global $pdo;
   $resultatTraite = [
      "infos" => "...",
      "result" => false,
      "data" => [],
   ];


   $sql = "SELECT *  FROM `horaire` ";



   $sql = $pdo->prepare($sql);

   try {
      $sql->execute([]);

   } catch (\Throwable $th) {
      $resultatTraite['infos'] = $th->getMessage();
      return $resultatTraite;
   }

   if ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
      $resultatTraite["data"][] = $row;
   }
   $resultatTraite['result'] = true;
   return $resultatTraite;
}