<?php
function deleteService($argument)
{
    global $pdo;

    $resultatTraite = [
        'result' => false,
        'infos' => '...',
    ];


    $requete = "DELETE FROM `service` WHERE `id` = :elt";

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