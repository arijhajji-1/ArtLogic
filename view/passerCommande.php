<?php
include_once "../configc.php";
include "../Controller/CommandeC.php";
include "../Model/Commande.php";
include "../Model/livraison.php";
include "../Controller/panierC.php";
include "../Controller/produitC.php";
include "../Controller/livraisonC.php";
 session_start();
$livraison = new livraisonC();
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


$livraison = new livraison($_POST['Id_produit'],$_POST['Genre'],$_SESSION['id_user'],$_SESSION['numero_telephone_user']);
(new livraisonC())->ajouterlivraison($livraison);



$panier->deleteAllcommandes($_SESSION['id_user']);
echo '<script>
alert("Votre commande à ete passé avec success!");
location.href="afficherproduitfront.php";
</script>';
?>
