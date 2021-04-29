<?php


include "../Core/panierC.php";
$panierC=new panierC();
$panier = $panierC->afficherPanier('1234');

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
<div class="container" >
    <div class="card mt-4 p-4" style="height: auto">
        <h1 style="color: #17a2b8;text-align: center"> Voici votre panier:</h1>
    <div class="mt-5">
        <?php
        foreach ($panier as $p){

            ?>
            <div class="card mb-2" style="padding: 20px 150px 20px 150px; width: 500px;  box-shadow: 10px 10px 10px 10px grey;">
                <h1 style="text-align: center"><?php echo $p['titre']; ?></h1>

                <span style="text-align: center"> <?php echo $p['prix_total'] ?> DT</span>
                <span style="text-align: center"> <?php echo $p[2]; ?> in cart</span>
                <div class="inline">
                <a href="add_produit.php?id_produit=<?php echo $p['id_produit']; ?>"> <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
                </a>
                    <?php if($p[2]!= 1) {

                    ?>
                    <a href="minus_produit.php?id_produit=<?php echo $p['id_produit']; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                    </svg></a>
                    <?php } ?>
                    <a href="removefrompanier.php?id_prod=<?php echo $p['id_produit']; ?>" style="width: 250px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                    </a>
                </div>


                </div>
            <?php
        }
        ?>
    </div>
<hr>
    <form method="post" action="passerCommande.php">
        <h6 style="color: #17a2b8;text-align: center"> Cliquer sur Passer commande, pour passer votre commande</h6>
<div class="form-group" style="padding:0px 90px 0px 90px;">
        <label>Mode de payement:</label>

            <select name="mode_payement" class="form-control">

            <option>Avec carte bancaire</option>
            <option>Mandat</option>
            <option>Cash au Livraison</option>
        </select>
    <br>
    <button type="submit" class="btn btn-info">Passer Commande</button>
</div>

</form>

        <button type="submit" class="btn btn-success" style="width: 200px;" onclick="location.href='panier.php'">Voir la liste des produits</button>
    </div>
</div>
</body>
</html>