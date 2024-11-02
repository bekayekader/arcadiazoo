<?php
function editService($pdo, $argument)
{

    $resultatTraite = [
        'result' => false,
        'infos' => '...',
    ];


    $requete = "UPDATE `service` SET `nom` = :nom, `description` = :description, `icone` = :icone WHERE `service`.`id` = :id";

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
        $resultatTraite = [
            'result' => false,
            'infos' => 'Impossible de réaliser cette opération: ' . $e->getMessage(),
        ];
    }

    return $resultatTraite;

}