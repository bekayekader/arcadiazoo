<?php 
function resetMdp($pdo, $id)
{
    
    $resultatTraite = [
        'statut' => false,
        'infos' => '...',
        ];

        $t = [
            "tid"=>secure($id),
            "tmdp"=>security($pdo)[ "defautMdp"],
        ];
        $requete = "UPDATE `admin` SET `mdp_admin` = :tmdp WHERE `admin`.`id_admin` = :tid ";

        $req1 = $pdo->prepare($requete);

        try {
            //code...
            if($req1->execute($t)){
         //   $lastId = $pdo->lastInsertId();
          $req1->execute($t);
            $resultatTraite = [
                'statut' => true,
                'infos' => 'Réinitialisé',
            ];

            }else{
                $resultatTraite = [
                    'statut' => false,
                    'infos' => 'Opération impossible',
                ];
            }
        } catch (Exception $e) {
            $resultatTraite = [
                'statut' => false,
                'infos' => 'Impossible de réaliser cette opération: '.$e->getMessage(),
            ];
        }
        
     
            return $resultatTraite;

}