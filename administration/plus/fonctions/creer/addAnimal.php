<?php
function addAnimal($pdo, $argument)
{

    $resultatTraite = [
        'result' => false,
        'infos' => '...',
    ];


    $requete = "INSERT INTO `animal` ( `prenom`, `race`, `image`, `slug`, `habitat_id`) VALUES (:prenom, :race, :image, :slug, :habitat)";

    $req1 = $pdo->prepare($requete);

    try {
        //code...
        if ($req1->execute($argument)) {
            $lastId = $pdo->lastInsertId();
            $resultatTraite = [
                'result' => true,
                'infos' => $lastId,
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