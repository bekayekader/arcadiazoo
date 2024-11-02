<?php
function editAnimal($pdo, $argument)
{

    $resultatTraite = [
        'result' => false,
        'infos' => '...',
    ];


    $requete = "UPDATE `animal` SET `prenom` = :prenom, `race` = :race, `image` = :image, `habitat_id` = :habitat WHERE `animal`.`id` =:id";

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