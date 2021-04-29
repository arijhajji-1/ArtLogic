<?php
include_once "../Core/ProduitC.php";
$product = new ProduitC();
$products = $product->afficherProduit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="container">
   <a href="cart_items.php"> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
        <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
    </svg>
    <small>consulter Panier</small>
   </a>
<div class="row mt-4">
    <?php
    foreach ($products as $p){
        ?>
        <div class="col-md-5 card">
            <h1><?php echo $p["titre"]; ?></h1>
            <p><?php echo $p["description"] ?></p>
            <span> <?php echo $p["prix"] ?> DT</span>
            <span> <?php echo $p["quantite"] ?> in stock</span>
            <a class="btn btn-success" href="add_panier.php?id_produit=<?php echo $p["id"]; ?>&&prix_total=<?php echo $p["prix"]; ?>" >Ajouter au panier</a>
        </div>
    <?php
    }
    ?>
</div>
</div>
</body>
</html>