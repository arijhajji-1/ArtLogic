<?php

include "../Model/panier.php";
include "../Core/panierC.php";

$panier= (new panierC())->supprimerPanier('1234',$_GET['id_prod']);
header('Location: cart_items.php');
?>