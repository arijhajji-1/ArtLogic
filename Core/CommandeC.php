<?php

include_once "config.php";
class CommandeC
{
    function ajouterCommande($commande){
        $sql="insert into commande (id_utilisateur,prix_total,mode_de_payement,description_commande,produits) values (:id_utilisateur,:prix_total,:mode_de_payement,:description_commande,:produits)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);

            $id_utilisateur=$commande->get_id_utilisateur();
            $prix_total=$commande->get_prix_total();
            $mode_de_payement=$commande->get_mode_de_payement();
            $description_commande=$commande->getDescriptionCommande();
            $produits = $commande->getProduits();
            $req->bindValue(':id_utilisateur',$id_utilisateur);
            $req->bindValue(':prix_total',$prix_total);
            $req->bindValue(':mode_de_payement',$mode_de_payement);
            $req->bindValue(':description_commande',$description_commande);
            $req->bindValue(':produits',$produits);

            $req->execute();

        }
        catch (Exception $e){
            die('Erreur: ajouterCommande'.$e->getMessage()) ;
        }

    }

  

    function afficherCommande($id_utilisateur){
        $sql="SElECT * From commande where id_utilisateur='$id_utilisateur'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: afficherCommande'.$e->getMessage());
        }
    }


    function supprimerCommande($id_commande){
        $sql="DELETE FROM commande where id_commande= :id_commande ";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_commande',$id_commande);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: supprimerCommande '.$e->getMessage());
        }
    }

    function rechercherCommande($valuesearch)
    {
                $sql="SELECT * from commande where prix_total like '%$valuesearch%' or mode_de_payement like '%$valuesearch%' or description_commande like '%$valuesearch%' or id_utilisateur like '%$valuesearch%'or id_commande like '%$valuesearch%' or produits like '%$valuesearch%'";
                $db = config::getConnexion();
      	try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: rechercherCommande '.$e->getMessage());
        }
	}



}
?>