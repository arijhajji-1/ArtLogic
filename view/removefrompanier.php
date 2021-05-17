<?php

include "../Model/panier.php";
include "../Controller/panierC.php";
session_start();

$panier= (new panierC())->supprimerPanier($_SESSION['id_user'],$_GET['id_prod']);
header('Location: cart_items.php');
?>