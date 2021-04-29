<?php
include_once "config.php";
class panierC
{
    function ajouterPanier($panier){
        $sql="insert into panier (id_client,id_produit,quantite,prix_total) values (:id_client,:id_produit,:quantite,:prix_total)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);

            $id_client=$panier->get_id_client();
            $id_produit=$panier->get_id_produit();
            $quantite=$panier->get_quantite();
            $prix_total=$panier->get_prix_total();
            $req->bindValue(':id_client',$id_client);
            $req->bindValue(':id_produit',$id_produit);
            $req->bindValue(':quantite',$quantite);
            $req->bindValue(':prix_total',$prix_total);

            $req->execute();

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage()) ;
        }

    }

    function afficherPanier($id_client){
        $sql="SElECT * From panier INNER JOIN produit ON panier.id_produit=produit.id where id_client='$id_client'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste->fetchAll();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function supprimerPanier($id_client,$id_produit){
        $sql="DELETE FROM panier where (id_client=:id_client and id_produit=:id_produit)";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_client',$id_client);
        $req->bindValue(':id_produit',$id_produit);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur supprimerPanier: '.$e->getMessage());
        }
    }
    function deleteAllcommandes($id_client){
        $sql="DELETE FROM panier where (id_client=:id_client)";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_client',$id_client);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur supprimerPanier: '.$e->getMessage());
        }
    }

    function modifierPanier($panier,$x,$prix){
        $sql="UPDATE panier SET quantite=:quantite, prix_total=:prix_total WHERE (id_client=:id_client and id_produit=:id_produit)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $id_client=$panier->get_id_client();
            $id_produit=$panier->get_id_produit();
            $quantite=$panier->get_quantite()+1;
            $prix_total=$panier->get_prix_total()+$prix;
            $req->bindValue(':id_client',$id_client);
            $req->bindValue(':id_produit',$id_produit);
            $req->bindValue(':quantite',$quantite);
            $req->bindValue(':prix_total',$prix_total);
            $s=$req->execute();
        }
        catch (Exception $e){
            die(" Erreur modiferpanier ! ".$e->getMessage()) ;
        }
    }
    function modifierPanierminus($panier,$x,$prix){
        $sql="UPDATE panier SET quantite=:quantite, prix_total=:prix_total WHERE (id_client=:id_client and id_produit=:id_produit)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $id_client=$panier->get_id_client();
            $id_produit=$panier->get_id_produit();
            $quantite=$panier->get_quantite()-1;
            $prix_total=$panier->get_prix_total()-$prix;
            $req->bindValue(':id_client',$id_client);
            $req->bindValue(':id_produit',$id_produit);
            $req->bindValue(':quantite',$quantite);
            $req->bindValue(':prix_total',$prix_total);
            $s=$req->execute();
        }
        catch (Exception $e){
            die(" Erreur modiferpanier ! ".$e->getMessage()) ;
        }
    }
    function recupererPanier($id_client,$id_prod){

        $sql="SELECT * from panier where (id_client='$id_client') and (id_produit='$id_prod')";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste->fetch();
        }
        catch (Exception $e){
            die('Erreur recupere panier: '.$e->getMessage());
        }
    }


}
?>