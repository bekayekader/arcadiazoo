<?php
function accepterAvis($argument)
{
    global $pdo;

    $resultatTraite = [
        'result' => false,
        'infos' => '...',
    ];


    $requete = "UPDATE `avis` SET est_valide = 1 WHERE `id` = :avis";

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