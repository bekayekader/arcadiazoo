<?php

///////////// count
function getRecap()
{
   global $pdo;
   $resultatTraite = [
      "infos" => "...",
      "result" => false,
      "data" => [],
   ];


   $sql = "SELECT (SELECT COUNT(*) FROM utilisateur WHERE role_id = 2) AS nombre_utilisateurs_role_2, (SELECT COUNT(*) FROM animal) AS nombre_animaux, (SELECT COUNT(*) FROM avis WHERE est_valide = 1) AS nombre_avis_valide, (SELECT COUNT(*) FROM habitat) AS nombre_habitats;";


   $sql = $pdo->prepare($sql);

   try {
      $sql->execute([]);

   } catch (\Throwable $th) {
      $resultatTraite['infos'] = $th->getMessage();
      return $resultatTraite;
   }

   if ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
      $resultatTraite["data"] = $row;
   }
   $resultatTraite['result'] = true;
   return $resultatTraite;
}