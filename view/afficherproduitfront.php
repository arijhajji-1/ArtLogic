<?php
require_once "../Controller/produitC.php";
require_once '../Model/produit.php';
require_once "../Controller/wishlisteC.php";
require_once '../Model/wishliste.php';
session_start();
$id_user= $_SESSION['id_user'];
$produitC = new produitC();
 
$Produit = $produitC->afficherproduit();

if (isset($_POST['submit']))
{

    $wishlisteC= new wishlisteC() ;
$wishliste = new wishliste($id_user,$_POST['ID']);
    $sql="SELECT * FROM wishliste WHERE id_user='" . $id_user . "' && id_produit = '". $_POST['ID']."'";
    $db = getConnexion();
    try{

        $query=$db->prepare($sql);
        $query->execute();
        $count=$query->rowCount();
        if($count==0){
            $user=$query->fetch();
            $wishlisteC->ajouterWishliste($wishliste);

        }

    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }



}
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
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
                <a href="index.php" class="link color-main mx-15">Home</a>
                <a href="afficheUser.php" class="link color-main mx-15">Profile</a>
                <a href="#" class="link color-main mx-15">Blog</a>
                <a href="about.html" class="link color-main mx-15">About</a>
                <a href="#" class="link color-main mx-15">Shop</a>
                <a href="reclamations.php" class="link color-main mx-15">Reclamation</a>
                                    <a href="chat.php" class="link color-main mx-15">messagerie</a>

 <a href="#" class="link color-main mx-15">Panier</a>
                <a href="#" class="link color-main mx-15"><i class="fas fa-search"></i></a>
            </div>
            <div class="mt-20 mt-lg-0 col-lg-3 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center" >
                <a href="login.php" class="mr-20 link color-main">Sign In</a>
                <a href="AjouterUser.php" class="btn sm action-2 f-16">Sign Up</a>
            </div>
        </div>
    </div>
</nav> 

<!--contenu sous forme de boite--> 
 
<nav class="navbar  bg-dark navbar-dark">
    <a class="navbar-brand center" href="#">Catégorie</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
      <?php
require_once('../connection.php');
$mysqli = new mysqli('localhost', 'root', '' ,'web');
if($mysqli->connect_error){
    die('Connect-Error (' . $mysqli->connect_error . ') '
        . $mysqli->connect_error);
}
$query = $mysqli->query( "SELECT * FROM categorie");
while ($array[] = $query->fetch_object()); 
    # code...
 array_pop ( $array );
?>                            
     <li class="nav-item">
         
     <?php foreach ( $array as $option ) :$opt=$option->NomC?>

 <a href="afficherproduitfront2.php?Genre=<?= $option->NomC ?>"  class="nav-link"><?php echo $option->NomC; ?></a> <br> 

     <?php endforeach; ?>       
     </li> 
     
      </ul>
    </div>  
  </nav>

<section class="container">
    <h2>Liste des Produits</h2>
            <br><br>
            <div class="shop-items">
    <?php
    foreach ($Produit as $produit)
    {
    ?>
    <div class="container px-xl-0">
        <form action="" method = "POST" >
          <div class="shop-item">
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title"><strong><?= $produit['NomP'] ?> </strong> </h4>
                            </div>
                            <div class="row">
                    <div class="shop-item-details">
                     <img src="../i/<?= $produit['image'] ?>"height="200" width="200">
                        <span class="shop-item-des"><?= $produit['Description1'] ?>  </span>
                        <br><br>
                        <?php if($produit['nouveauPrix']==0) { ?>
                        <span class="" class="shop-item-price">Prix: <?= $produit['Prix'] ?> TND </span>
                        <br><br>

                        <?php } else { ?>
                            <span class="amount-old" class="shop-item-price">Prix: <?= $produit['Prix'] ?> TND </span>
                        <br><br>
                        <span class="shop-item-price">nouveau Prix: <?= $produit['nouveauPrix'] ?> TND </span>
                        <br><br>  
                       <?php }?>
                        <span class="shop-item-date"> Date d'ajout: <?= $produit['DateA'] ?>  </span>
                        <br><br>
                        <span class="shop-item-des">Genre :<?= $produit['Genre'] ?>  </span>
                        <br><br>
                        <span class="shop-item-date"> Quantité: <?= $produit['Quantite'] ?>  </span>
                        <br><br>
                        <a type="button" class="btn sm action-2 f-16" href = "modifierproduit1.php?Id_produit=<?= $produit['Id_produit'] ?>">view</a>
                        <a type="button" class="btn sm action-2 f-16" href = "modifierproduit1.php?Id_produit=<?= $produit['Id_produit'] ?>">Ajouter Panier</a> 
                         
            <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fafficherproduitfront.php&layout=button_count&size=small&width=91&height=20&appId" width="91" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        
</div> <!-- /.row -->
                            <div class="card-body"></div>
                        </div>
                    </div><!-- /# column -->
                </div>
                    </div>
                </div>
                <br><br>
            

            <div>
                <input type="submit" value="Add" name="submit" id="submit" class="mt-25 btn action-1 w-full"   >
                <input type="hidden" value="<?PHP echo $produit['Id_produit']; ?>" name="ID">
            </div>
        </form>
    </div>
        <?php
    }
    ?>
</div>
</section>
        
    <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
       <script>
       (function(d, s, id)
        {
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) return;
       js = d.createElement(s); js.id = id;
       js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
       fjs.parentNode.insertBefore(js, fjs);
         }
       (document, 'script', 'facebook-jssdk'));
       </script>
        
        <!-- Your share button code -->
<div class="fb-share-button" 
data-href="http://afficherproduitfront.php" 
data-layout="button_count">
</div>
    
    

 


   <!--pied de page-->
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





<!--<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v10.0" nonce="1avFbC5g"></script>-->

</body>
</html>

