<?php

include "../Core/CommandeC.php";
include "../Model/Commande.php";
include "../Core/panierC.php";
include "../Core/produitC.php";
$produit = new ProduitC();
$panier = new panierC();
$touslesitems= $panier->afficherPanier('1234');
$prix_globale= 0;
$str = "";
foreach($touslesitems as $x){
$str=$str.$x['titre'].',';
    $prix_globale+=$x['prix_total'];
}
$str = rtrim($str, ", ");
$commande = new commande('1234',$str,$prix_globale,$_POST['mode_payement'],"commande pour le client n°= 1111");
(new CommandeC())->ajouterCommande($commande);

$panier->deleteAllcommandes('1234');
echo '<script>
alert("Votre commande à ete passé avec success!");
location.href="panier.php";
</script>';
?>