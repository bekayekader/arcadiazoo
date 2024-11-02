<?php
function addUser($pdo, $argument)
{

    $resultatTraite = [
        'result' => false,
        'infos' => '...',
    ];

    $email = $argument['email'];

    $requete = "INSERT INTO `utilisateur` ( `email`, `password`, `role_id` ) VALUES (  :email , :password , :role )";

    $req1 = $pdo->prepare($requete);

    try {
        //code...
        if ($req1->execute($argument)) {
            $resultatTraite = [
                'result' => true,
                'infos' => "L'utilisateur $email a été créé avec le mot de passe ",
            ];
        } else {
            $resultatTraite = [
                'result' => false,
                'infos' => 'Opération impossible',
            ];
        }
    } catch (Exception $e) {
        if ($e->getCode() == 23000)
            $resultatTraite['infos'] = "Des doublons empêchent l'enregistrement ☹";
        else
            $resultatTraite = [
                'result' => false,
                'infos' => 'Impossible de réaliser cette opération: ' . $e->getMessage(),
            ];
    }

    return $resultatTraite;

}