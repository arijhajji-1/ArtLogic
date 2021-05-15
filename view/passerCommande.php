<?php

include "../Controller/CommandeC.php";
include "../Model/Commande.php";
include "../Controller/panierC.php";
include "../Controller/produitC.php";
$produit = new ProduitC();
$panier = new panierC();
$touslesitems= $panier->afficherPanier('id_user');
$prix_globale= 0;
$str = "";
foreach($touslesitems as $x){
$str=$str.$x['NomP'].',';
    $prix_globale+=$x['prix_total'];
}
$str = rtrim($str, ", ");
$commande = new commande('$id_user',$str,$prix_globale,$_POST['mode_payement'],"commande pour le client n°= 'id_user'");
(new CommandeC())->ajouterCommande($commande);

$panier->deleteAllcommandes('id_user');
echo '<script>
alert("Votre commande à ete passé avec success!");
location.href="afficherproduitfront.php";
</script>';
?>