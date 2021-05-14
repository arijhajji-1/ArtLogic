<?php

include "../Model/Panier.php";
include "../Core/PanierC.php";
include "../Core/ProduitC.php";
$prod= (new panierC())->recupererPanier('id_user',$_GET['Id_produit']);
$prd= (new ProduitC())->recupererProduit($_GET['Id_produit']);
$panier = new panier($prod['id_user'],$prod['Id_produit'],$prod['Quantite'],$prod['prix_total']);
var_dump($panier);
(new panierC())->modifierPanier($panier,$prod,$prd['Prix']);
header('location:cart_items.php');
