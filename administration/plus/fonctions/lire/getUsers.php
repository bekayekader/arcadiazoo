<?php

///////////// liste des users
function getUsers($type = "all", $argument = [])
{
   global $pdo;
   $resultatTraite = [
      "infos" => "...",
      "result" => false,
      "data" => [],
   ];

   if ($type == "all")
      $sql = "SELECT utilisateur.id, email, role_id, nom AS role  FROM `utilisateur` JOIN role ON role.id = utilisateur.role_id";

   if ($type == "solo")
      $sql = "SELECT utilisateur.id, email, role_id, nom AS role  FROM `utilisateur` JOIN role ON role.id = utilisateur.role_id WHERE utilisateur.id = :main ";


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