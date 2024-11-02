<?php

function loginFunc($pdo, $user, $monMotDePasse, $duree)
{
  $resultatTraite = [
    "result" => false,
    "data" => [],
    "infos" => "?"
  ];

  $mdp = sha1($monMotDePasse);
  $sql = $pdo->prepare("SELECT * FROM `utilisateur` JOIN role ON role_id = role.id WHERE email = :user AND `password` = :mdp ;");
  try {
    $sql->execute(['user' => $user, "mdp" => $mdp]);

  } catch (\Throwable $th) {
    $resultatTraite['infos'] = $th->getMessage();
    return $resultatTraite;
  }

  $count = $sql->rowCount();

  if ($count != 1) {
    $resultatTraite['infos'] = "Informations incorrectes, veuillez réessayer";
    return $resultatTraite;
  }

  if ($duree == "true")
    $d = 30;
  else
    $d = 3;


  if ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
    // if ($row['statut'] == "0") {
    //   $resultatTraite['infos'] = "Votre compte est suspendu. Contactez l'administrateur ☣ ";
    //   return $resultatTraite;
    // }

    $resultatTraite['result'] = true;

    $resultatTraite['infos'] = "Connecté avec succès";
    $userInfo = $row;
    $userInfoAll = $userInfo;
    // $userInfoAll['droits'] = $row['droits'];

    $menu = [];

    if ($row['role_id'] == 1) {
      // admin
      $menu = [
        ["titre" => "Espace Administrateur", "lien" => "administrateur", "description" => "Création de comptes pour employés et vétérinaires, gestion des services, horaires, habitats, et animaux."],
        ["titre" => "Gestion des avis ", "lien" => "gestion-avis", "description" => " Validation ou refus des avis soumis par les visiteurs"],
        ["titre" => " Dashboard", "lien" => "dashboard", "description" => " Visualisation des statistiques de consultation par animal."],
        ["titre" => "Comptes rendus vétérinaires", "lien" => "cr", "description" => " Consultation et filtrage des rapports sur les animaux."],
      ];
    }


    if ($row['role_id'] == 2) {
      // vétérinaire
      $menu = [
        ["titre" => "Saisie de compte rendu", "lien" => "saisie-cr", "description" => "Saisie des comptes rendus par animal"],
        ["titre" => "Commentaire habitat", "lien" => "commenter-habitat", "description" => "ajout de commentaires sur les habitats"],
        ["titre" => "Données alimentaires", "lien" => "data-aliment", "description" => "consultation des données alimentaires des animaux"],
      ];
    }

    if ($row['role_id'] == 3) {
      $menu = [
        ["titre" => "Gestion des avis ", "lien" => "gestion-avis", "description" => " Validation ou refus des avis soumis par les visiteurs"],
        ["titre" => "Modification des services", "lien" => "services", "description" => "modification des services"],
        ["titre" => "Alimentation  ", "lien" => "alimentation", "description" => "gestion de l'alimentation des animaux"],
      ];
    }



    $resultatTraite['data'] = [
      "user" => $userInfo,
      "menu" => $menu,
      "droits" => [],
      "duree" => $d,
      "token" => encodeToken($userInfoAll),
    ];
  }
  return $resultatTraite;
}