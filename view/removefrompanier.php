<?php

include "../Model/panier.php";
include "../Controller/panierC.php";

$panier= (new panierC())->supprimerPanier('id_user',$_GET['id_prod']);
header('Location: cart_items.php');
?>