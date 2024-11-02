<?php

// liste des comptes rendus
function getCr()
{
   global $pdo;
   $resultatTraite = [
      "infos" => "...",
      "result" => false,
      "data" => [],
   ];

   $sql = "SELECT animal.id, animal.prenom, utilisateur.email, `etat`, `nourriture`, `grammage`, `date_passage`, `details` FROM `rapport_veterinaire` JOIN animal ON animal_id = animal.id JOIN utilisateur ON utilisateur.id = veterinaire_id ORDER BY date_passage DESC";


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