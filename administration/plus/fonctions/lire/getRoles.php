<?php

///////////// liste des roles
function getRoles()
{
   global $pdo;
   $resultatTraite = [
      "infos" => "...",
      "result" => false,
      "data" => [],
   ];


   $sql = "SELECT *  FROM `role`";



   $sql = $pdo->prepare($sql);

   try {
      $sql->execute([]);

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