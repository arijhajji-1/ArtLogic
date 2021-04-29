<?php

require_once '../connexion.php';
require_once '../Controller/produitC.php';
require_once '../Model/produit.php';
class produitC
{
    public function afficherproduit()
    {
        try {
            $pdo = getconnexion();
            $query = $pdo->prepare(
                'SELECT * FROM produit   '
            );

            $query->execute(
            );
            return $query->fetchAll();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}

?>