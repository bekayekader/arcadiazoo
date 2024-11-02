<?php
function incrementerVue($id, $new)
{
    // incrémente les vues
    global $pdo;

    $resultatTraite = [
        'result' => false,
        'infos' => '...',
    ];
    $argument = ["main" => $new, "id" => $id,];

    $requete = "UPDATE `animal` SET `visualiser` = :main WHERE `animal`.`id` = :id";

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