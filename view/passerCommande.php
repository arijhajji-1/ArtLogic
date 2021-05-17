<?php

include "../Controller/CommandeC.php";
include "../Model/Commande.php";
include "../Controller/panierC.php";
include "../Controller/produitC.php";
session_start();
$produit = new ProduitC();
$panier = new panierC();
$touslesitems= $panier->afficherPanier($_SESSION['id_user']);
$prix_globale= 0;
$str = "";
foreach($touslesitems as $x){
$str=$str.$x['NomP'].',';
    $prix_globale+=$x['prix_total'];
}
$str = rtrim($str, ", ");
$commande = new commande($_SESSION['id_user'],$str,$prix_globale,$_POST['mode_payement'],"commande pour le client n°= $_SESSION[id_user]");
(new CommandeC())->ajouterCommande($commande);

$panier->deleteAllcommandes($_SESSION['id_user']);
echo '<script>
alert("Votre commande à ete passé avec success!");
location.href="afficherproduitfront.php";
</script>';
?>