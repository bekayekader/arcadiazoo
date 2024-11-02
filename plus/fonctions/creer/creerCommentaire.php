<?php
function creerCommentaire($argument)
{
    global $pdo;
    $resultatTraite = [
        'result' => false,
        'infos' => '...',
    ];


    $requete = "INSERT INTO `avis` ( `pseudo`, `commentaire` ) VALUES ( :pseudo, :commentaire )";

    $req1 = $pdo->prepare($requete);

    try {
        //code...
        if ($req1->execute($argument)) {
            $resultatTraite = [
                'result' => true,
                'infos' => 'Succès',
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