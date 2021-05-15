<?php
include_once "../configc.php";
class panierC
{
    function ajouterPanier($panier){
        $sql="insert into panier (id_user,Id_produit,Quantite,prix_total) values (:id_user,:Id_produit,:Quantite,:prix_total)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $id_user=$panier->get_id_user();
            $Id_produit=$panier->get_Id_produit();
            $Quantite=$panier->get_Quantite();
            $prix_total=$panier->get_prix_total();
            $req->bindValue(':id_user',$id_user);
            $req->bindValue(':Id_produit',$Id_produit);
            $req->bindValue(':Quantite',$Quantite);
            $req->bindValue(':prix_total',$prix_total);

            $req->execute();

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage()) ;
        }

    }

    function afficherPanier($id_user){
        $sql="SElECT * From panier INNER JOIN produit ON panier.Id_produit=produit.Id_produit where id_user='$id_user'";
        		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}



    function supprimerPanier($id_user,$Id_produit){
        $sql="DELETE FROM panier where (id_user=:id_user and Id_produit=:Id_produit)";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_user',$id_user);
        $req->bindValue(':Id_produit',$Id_produit);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur supprimerPanier: '.$e->getMessage());
        }
    }
    function deleteAllcommandes($id_user){
        $sql="DELETE FROM panier where (id_user=:id_user)";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_user',$id_user);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur supprimerPanier: '.$e->getMessage());
        }
    }

    function modifierPanier($panier,$x,$Prix){
        $sql="UPDATE panier SET Quantite=:Quantite, prix_total=:prix_total WHERE (id_user=:id_user and Id_produit=:Id_produit)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $id_user=$panier->get_id_user();
            $Id_produit=$panier->get_Id_produit();
            $Quantite=$panier->get_quantite()+1;
            $prix_total=$panier->get_prix_total()+$Prix;
            $req->bindValue(':id_user',$id_user);
            $req->bindValue(':Id_produit',$Id_produit);
            $req->bindValue(':Quantite',$Quantite);
            $req->bindValue(':prix_total',$prix_total);
            $s=$req->execute();
        }
        catch (Exception $e){
            die(" Erreur modiferpanier ! ".$e->getMessage()) ;
        }
    }
    function modifierPanierminus($panier,$x,$Prix){
        $sql="UPDATE panier SET Quantite=:Quantite, prix_total=:prix_total WHERE (id_user=:id_user and Id_produit=:Id_produit)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $id_user=$panier->get_id_user();
            $Id_produit=$panier->get_Id_produit();
            $Quantite=$panier->get_quantite()-1;
            $prix_total=$panier->get_prix_total()+$Prix;
            $req->bindValue(':id_user',$id_user);
            $req->bindValue(':Id_produit',$Id_produit);
            $req->bindValue(':Quantite',$Quantite);
            $req->bindValue(':prix_total',$prix_total);
            $s=$req->execute();
        }
        catch (Exception $e){
            die(" Erreur modiferpanier ! ".$e->getMessage()) ;
        }
    }
    function recupererPanier($id_user,$Id_produit){

        $sql="SELECT * from panier where (id_user='$id_user') and (Id_produit='$Id_produit')";
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