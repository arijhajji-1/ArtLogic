<?php
require_once '../connexion.php';
require_once '../Controller/wishlisteC.php';
require_once '../Model/wishliste.php';

class wishlisteC
{
    public function ajouterWishliste($wishliste) {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare('INSERT INTO wishliste (id_user,id_produit) 
                VALUES (:id_user,:id_produit)'
            );
            $query->execute([
                'id_user' => $wishliste->getId_user(),
                'id_produit' => $wishliste->getId_produit()
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }

    }
    public function afficherWP($id)
    {
        try {
            $pdo = getconnexion();
            $query = $pdo->prepare(
                'SELECT * FROM wishliste INNER JOIN produit ON wishliste.id_produit = produit.id_produit  WHERE id_user= :id '
            );

            $query->execute([
                    'id' => $id
                ]
            );
            return $query->fetchAll();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function supprimerWP($id) {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                'DELETE FROM wishliste WHERE id_wishlist = :id'
            );
            $query->execute([
                'id' => $id
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}

?>