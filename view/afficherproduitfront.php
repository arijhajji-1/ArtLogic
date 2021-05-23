<?php
require_once "../Controller/produitC.php";
require_once '../Model/produit.php';
require_once "../Controller/wishlisteC.php";
require_once '../Model/wishliste.php';


session_start();
if(!empty($_SESSION))
{$id_user= $_SESSION['id_user'];}
$produitC = new produitC();
 
$Produit = $produitC->afficherproduit();

if (isset($_POST['submit']))
{if(empty($_SESSION))
{header('location:login.php');}

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
	.pt-100 {
                padding-top: 100px;
            }
            .pb-70 {
                padding-bottom: 70px;
            }
            .section-header {
                margin-bottom: 60px;
                text-align: center;
            }
            .section-header i {
                color: #ff007d;
                font-size: 50px;
                display: inline-block;
                margin-bottom: 10px;
            }
            .section-header h2 {
                font-weight: bold;
                font-size: 34px;
                margin: 0;
            }
            .section-header p {
                max-width: 500px;
                margin: 20px auto 0;
            }
            .single-publication {
                border: 1px solid #f2eee2;
                margin-bottom: 30px;
                position: relative;
                overflow: hidden;
            }
            .single-publication figure {
                position: relative;
                margin: 0;
                text-align: center;
            }
            .single-publication figure > a {
                background-color: #fafafa;
                display: block;
            }
            .single-publication figure ul {
                list-style-type: none;
                padding: 0;
                margin: 0;
                position: absolute;
                right: -50px;
                top: 20px;
                transition: .6s;
                -webkit-transition: .6s;
            }
            .single-publication:hover figure ul {
                right: 15px;
            }
            .single-publication figure ul li a {
                display: inline-block;
                width: 35px;
                height: 35px;
                text-align: center;
                font-size: 15px;
                background: #ff007d;
                margin-bottom: 7px;
                border-radius: 50%;
                line-height: 35px;
                color: #fff;
            }
            .single-publication figure ul li a:hover {
                color: #fff;
                background: #e50663;
            }
            .single-publication .publication-content {
                text-align: center;
                padding: 20px;
            }
            .single-publication .publication-content .category {
                display: inline-block;
                font-family: 'Open Sans', sans-serif;
                font-size: 14px;
                color: #ff007d;
                font-weight: 600;
            }
            .single-publication .publication-content h3 {
                font-weight: 600;
                margin: 8px 0 10px;
                font-size: 20px;
            }
            .single-publication .publication-content h3 a {
                color: #1f2d30;
            }
            .single-publication .publication-content h3 a:hover {
                color: #ff007d;
            }
            .single-publication .publication-content ul {
                list-style-type: none;
                padding: 0;
                margin: 0;
                margin-bottom: 15px;
            }
            .single-publication .publication-content ul li {
                display: inline-block;
                font-size: 18px;
                color: #fec42d;
            }
            .single-publication .publication-content .price {
                font-size: 18px;
                color: #ff007d;
            }
            .single-publication .publication-content .price span {
                color: #6f6f6f;
                text-decoration: line-through;
                padding-left: 5px;
                font-weight: 300;
            }
            .single-publication .add-to-cart {
                position: absolute;
                right: 0;
                bottom: 0;
                left: 0;
                background: #fff;
                opacity: 0;
                visibility: hidden;
                text-align: center;
                -webkit-transform: scale(.7);
                transform: scale(.7);
                height: 105px;
                -moz-transition: .4s;
                -webkit-transition: .4s;
                transition: .4s;
            }
            .single-publication:hover .add-to-cart {
                visibility: visible;
                transform: scale(1);
                -webkit-transform: scale(1);
                opacity: 1;
            }
            .single-publication .add-to-cart .default-btn {
                margin-top: 28px;
                padding: 8px 25px;
                font-size: 14px;
            }
            .single-publication .category {
                margin: 0;
            }
            .single-publication .add-to-cart .default-btn {
                margin-top: 28px;
                padding: 8px 25px;
                font-size: 14px;
            }
            .default-btn {
                background-color: #ff007d;
                color: #fff;
                border: 1px solid #ff007d;
                display: inline-block;
                padding: 10px 30px;
                border-radius: 30px;
                text-transform: uppercase;
                font-weight: 600;
                font-family: 'Open Sans', sans-serif;
            }
            a:hover {
                color: #fff;
                text-decoration: none;
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
                                    <a href="animation.html" class="dropdown-item"><i class="fas fa-user"></i>Admin</a></a>

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
 
 <!--soul--> 
 <section class="our-publication pt-100 pb-70">
            <div class="container">
                <div class="section-header">
                    <i class="fa fa-book"></i>
                    <h2>listes des produits</h2>
                    <p>we have the best product in the country </p>
                </div>
                
				<?php
					foreach ($Produit as $Produit) {
                        
				?>

				<form action="" method = "POST" >
                <div class="row">
                    <div class="col-sm-6 col-lg-3"> 
                        <div class="single-publication">
                            <figure>
                                <a href="#">
								<img src="../i/<?= $Produit['image'] ?>"height="200" width="200">
                                </a>

                                <ul>
								
                                    <li><div title="Add to Favorite"><i class="fa fa-heart"> 
									<input type="submit" value="Add" name="submit" id="submit"  class="fa fa-heart"  >
                                    <input type="hidden" value="<?PHP echo $Produit['Id_produit']; ?>" name="ID">
									
									</i></div></li>
                                    
                                </ul>
                            </figure>

                            <div class="publication-content">
                                <span class="category"><strong><?= $Produit['NomP'] ?></span>
                                
                                <ul>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                </ul>
                                <?php if($Produit['nouveauPrix']==0) { ?>
						<span class="" class="price">Prix: <?= $Produit['Prix'] ?> TND </span>
						<br><br>

						<?php } else { ?>
							<span class="amount-old" class="price">Prix: <?= $Produit['Prix'] ?> TND </span>
						<br><br>
						<span class="price">nouveau Prix: <?= $Produit['nouveauPrix'] ?> TND </span>
						<br><br>

					   <?php }?>
                            </div>

                            <div class="add-to-cart">

                                <a type="button" class="default-btn" href="add_panier.php?Id_produit=<?php echo $Produit["Id_produit"]; ?>&& prix_total=<?php echo $Produit["Prix"]; ?>" >Ajouter au panier</a>
                                <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fproduit.php&layout=button_count&size=small&width=91&height=20&appId" width="91" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>

                        </div>
                    </div>
                    
                   
                    
                    
                    
                   


                </div>
			</form>
			
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

