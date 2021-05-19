<?php

include "../Controller/produitC.php";
include "../Controller/panierC.php";
session_start();

$panierC=new panierC();
$panier = $panierC->afficherPanier($_SESSION['id_user']);

?>
 
<!DOCTYPE html>
<html lang="fr">

<head>
  
    <style> 
    .amount-old {
    text-decoration: line-through;
}
    </style>
        <meta charset="utf-8" >
        <title>ArtLogic</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
       <meta property="og:url"           content="http://afficherproduitfront.php" />
        <meta property="og:type"          content="website" />
       <meta property="og:title"         content="ArtLogic" />
       <meta property="og:description"   content="welcome to our website" />
       <meta property="og:image"         content="i/logo.png" />

                <link rel="icon" href="../i/logo.png" type="i/logo.png">
        <!-- Google Fonts -->
                <link href="https://fonts.googleapis.com/css?family=Rubik:100,200,300,400,600,500,700,800,900|Karla:100,200,300,400,500,600,700,800,900&amp;subset=latin" rel="stylesheet">
                <!-- Bootstrap 4.3.1 CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Slick 1.8.1 jQuery plugin CSS (Sliders) -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <!-- Fancybox 3 jQuery plugin CSS (Open images and video in popup) -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <!-- AOS 2.3.1 jQuery plugin CSS (Animations) -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- Startup 3 CSS (Styles for all blocks) -->
                    <link href="../css/style.css" rel="stylesheet" /> 
                <!-- jQuery 3.3.1 -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>


<nav class="navigation_1 bg-light pt-30 pb-30 text-center">
    <div class="container px-xl-0">
        <div class="row justify-content-center align-items-center f-16">
            <div class="mt-20 d-flex align-items-center author_info">
                    <img  src="..\i\logo.png" class="w-300 h-300 radius_full" alt="" />
            <div class="col-lg-6" >
                <a href="index.html" class="link color-main mx-15">Home</a>
                <a href="#" class="link color-main mx-15">Profile</a>
                <a href="#" class="link color-main mx-15">Blog</a>
                <a href="about.html" class="link color-main mx-15">About</a>
                <a href="afficherproduitfront.php" class="link color-main mx-15">Shop</a>
                                <a href="reclamations.php" class="link color-main mx-15">Reclamation</a>

                <a href="#" class="link color-main mx-15"><i class="fas fa-search"></i></a>
            </div>
            <div class="mt-20 mt-lg-0 col-lg-3 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center" >
                <a href="login.php" class="mr-20 link color-main">Sign In</a>
                <a href="AjouterUser.php" class="btn sm action-2 f-16">Sign Up</a>
            </div>
        </div>
    </div>
</nav> 
<div class="container" >
    <div class="card mt-4 p-4" style="height: auto">
        <h1 style="color: #17a2b8;text-align: center"> Voici votre panier:</h1>
    <div class="mt-5">
        <?php
        foreach ($panier as $p ){
              
            ?>
            <div class="card mb-2" style="padding: 20px 150px 20px 150px; width: 500px;  box-shadow: 10px 10px 10px 10px grey;">
            <h1 style="text-align: center"><?php echo $p['NomP']; ?></h1>


                <span style="text-align: center"> <?php echo $p['prix_total'] ?> DT</span>
                <span style="text-align: center"> <?php echo $p[2]; ?> in cart</span>
                <div class="inline">
                <a href="add_produit.php?Id_produit=<?php echo $p['Id_produit']; ?>"> <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
                </a>
                    <?php if($p[2]!= 1) {

                    ?>
                    <a href="minus_produit.php?Id_produit=<?php echo $p['Id_produit']; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                    </svg></a>
                    <?php } ?>
                    <a href="removefrompanier.php?id_prod=<?php echo $p['Id_produit']; ?>" style="width: 250px;">
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
    <div>
     <td><form method="POST" action="commandeses.php">
	  <button class="btn btn-dark">afficher vos commandes</button>
      </div>
	</form>
	</td>
<hr>
    <form method="post" action="passerCommande.php">
        <h6 style="text-align: center"> Cliquer sur Passer commande, pour passer votre commande</h6>
<div class="form-group" style="padding:0px 90px 0px 90px;">
        <label>Mode de payement:</label>

            <select name="mode_payement" class="form-control">

            <option>Avec carte bancaire</option>
            <option>Mandat</option>
            <option>Cash au Livraison</option>
        </select>
    <br>
    <button type="submit" class="btn btn-dark">Passer Commande</button>


   


<footer class="footer_1 bg-light pt-75 pb-65 text-center">
    <div class="container px-xl-0">
        <div class="row justify-content-between align-items-center lh-40 links">
            <div class="col-lg-4 col-sm-6 text-sm-right text-lg-left order-1 order-lg-0" >
                <a href="about.html" class="mr-15 link color-main">About</a>
                <a href="#" class="mx-15 link color-main">Policy</a>
                <a href="#" class="mx-15 link color-main">Terms</a>
            </div>
            <div class="mt-20 d-flex align-items-center author_info">
                    <img  src="..\i\logo.png" class="w-300 h-300 radius_full" alt="" />
            </div>
            <div class="col-lg-4 col-sm-6 text-sm-left text-lg-right order-2 order-lg-0" >
                <a href="#" class="mr-15 link color-main">Contacts</a>
                <a href="#" class="mx-15 link color-main"><i class="fab fa-twitter"></i></a>
                <a href="#" class="mx-15 link color-main"><i class="fab fa-facebook-square"></i></a>
                <a href="#" class="ml-15 link color-main"><i class="fab fa-google-plus-g"></i></a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="mt-10 col-xl-4 col-lg-5 col-md-6 col-sm-8">
                <div class="color-heading text-adaptive">
                    Be sure to take a look at our <a href="#" class="link color-heading">Terms of Use</a> <br />
                    and <a href="#" class="link color-heading">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>