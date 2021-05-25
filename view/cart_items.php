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
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda+One">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/session.css">
    </head>

<body>

<?php
if(empty($_SESSION))
{
    ?>
    <nav class="navigation_1 bg-light pt-30 pb-30 text-center">
        <div class="container px-xl-0">
            <div class="row justify-content-center align-items-center f-16">
                <div class="mt-20 d-flex align-items-center author_info">
                    <a href="index.php" class="link color-main mx-15"><img  src="../i/logo.png" class="w-300 h-300 radius_full" alt="" /></a>
                    <div class="col-lg-6" >
                        <a href="index.php" class="link color-main mx-15">Home</a>
                        <a href="actualiteFront.php" class="link color-main mx-15">News</a>
                        <a href="about.php" class="link color-main mx-15">About</a>
                        <a href="afficherproduitfront.php" class="link color-main mx-15">Shop</a>
                    </div>
                    <div class="mt-20 mt-lg-0 col-lg-3 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center" >
                        <a href="login.php" class="mr-20 link color-main">Sign In</a>
                        <a href="AjouterUser.php" class="btn sm action-2 f-16">Sign Up</a>
                    </div>

                </div>
            </div>
    </nav>
    <?php
}
else if(!empty($_SESSION)) {
    ?>
    <nav class="navigation_1 bg-light pt-30 pb-30 text-center">
        <div class="container px-xl-0">
            <div class="row justify-content-center align-items-center f-16">
                <div class="mt-20 d-flex align-items-center author_info">
                    <a href="index.php" class="link color-main mx-15"><img  src="../i/logo.png" class="w-300 h-300 radius_full" alt="" /></a>
                    <div class="col-lg-6" >
                        <a href="index.php" class="link color-main mx-15">Home</a>
                        <a href="actualiteFront.php" class="link color-main mx-15">News</a>
                        <a href="about.php" class="link color-main mx-15">About</a>
                        <a href="afficherproduitfront.php" class="link color-main mx-15">Shop</a>
                        <a href="cart_items.php" class="link color-main mx-15"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <div class="navbar-nav ml-auto">
                        <div class="nav-item dropdown" >
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="../i/<?php echo $_SESSION['image']; ?>" class="avatar" alt="Avatar"> <?php echo $_SESSION['pseudo_user']; ?><b class="caret"></b></a>
                            <div class="dropdown-menu">
                                <a href="AfficheUser.php" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a></a>
                                <a href="listreclamation.php" class="dropdown-item"><i class="fas fa-poll-h"></i> Reclamation</a></a>
                                <a href="AfficheWishList.php" class="dropdown-item"><i class="fa fa-heart"></i> Wishlist</a></a>
                                <a href="chat.php" class="dropdown-item"><i class="fas fa-comment-dots"></i> Chat</a></a>
                                <?php
                                if($_SESSION['role']==1) {
                                    ?>
                                    <a href="ajouterproduit1.php" class="dropdown-item"><i class="fas fa-plus-circle"></i> Ajouter produit</a></a>
                                    <?php
                                }
                                else if($_SESSION['role']==2) {
                                    ?>
                                    <a href="clients.php" class="dropdown-item"><i class="fas fa-user"></i>Admin</a></a>

                                    <?php
                                }
                                ?>
                                <div class="dropdown-divider"></div>
                                <a href="logout.php" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </nav>
    <?php
}
?>










<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                <?php
            foreach ($panier as $p ){

                ?>
                    <tr>
                    
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="../i/<?= $p['image'] ?>" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $p['NomP']; ?></h4>
                                <h5 class="media-heading"> <?php echo $p['Genre']; ?></h5>
                                <span>disponibilité: </span><span class="text-success"><strong><?php echo $p['Quantite']; ?> en stock</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $p[2]; ?>">
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

                      
                    </div>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>
                        
                        
                         <?php if ($p['nouveauPrix'] != 0) 
                        {
                            echo $p['nouveauPrix']; }
                        else {echo $p['Prix'];
                        }   
                        ?>
                        </strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?php echo $p['prix_total'] ?> DT</strong></td>
                        <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-danger">   
                        
            <span onclick="window.location.href='removefrompanier.php?id_prod=<?php echo $p['Id_produit']; ?>'">supprimer</span>

                        </button></td>
                    </tr>
                    <?php } ?>
                  
                   
                    <tr>
                        <td>   <form method="POST" action="passerCommande.php">
        <div class="form-group" style="padding:0px 90px 0px 90px;">
            <label>Mode de payement:</label>

            <select name="mode_payement" class="form-control">

                <option>Avec carte bancaire</option>
                <option>Mandat</option>
                <option>Cash au Livraison</option>
            </select>

            <input type="hidden" value="<?PHP echo $p['Id_produit']; ?>" name="Id_produit">
            <input type="hidden" value="<?PHP echo $p['Genre']; ?>" name="Genre">
    </form>
    <button type="submit" class="btn btn-success">Passer Commande</button>
 </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong><?php echo $p['prix_total'] ?> DT</strong></h3></td>
                    </tr>
                    
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        
                        <button type="button" class="btn btn-default">
                        <span onclick="window.location.href='afficherproduitfront.php'">Continuer vos achats</span>
                        </button>
                        <div>
        <td><form method="POST" action="commandeses.php">
                <button class="btn btn-default">afficher vos commandes</button>
    </div>
</td>
                        <td>
                       
 </td>
                    </tr>
                   
                    
                     </tbody>
                     
            </table>
            
           
        </div>
    </div>
</div>












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