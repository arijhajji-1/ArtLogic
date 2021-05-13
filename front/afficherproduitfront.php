<?php
include_once '../controller/produitC.php';
include_once '../model/produit.php'; 


$produitC = new produitC(); 
$produit=$produitC->afficherproduit();  





?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" >
		<title>ArtLogic</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
       <meta property="og:url"           content="http://afficherproduitfront.php" />
        <meta property="og:type"          content="website" />
       <meta property="og:title"         content="ArtLogic" />
       <meta property="og:description"   content="welcome to our website" />
       <meta property="og:image"         content="i/logo.png" />

				<link rel="icon" href="i/logo.png" type="i/logo.png">
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
					<link href="css/style.css" rel="stylesheet" /> 
				<!-- jQuery 3.3.1 -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
			</head> 
	<body>
<!-- Navigation 1 -->

<nav class="navigation_1 bg-light pt-30 pb-30 text-center">
	<div class="container px-xl-0">
		<div class="row justify-content-center align-items-center f-16">
			<div class="mt-20 d-flex align-items-center author_info">
					<img  src="i\logo.png" class="w-300 h-300 radius_full" alt="" />
			<div class="col-lg-6" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
				<a href="index.html" class="link color-main mx-15">Home</a>
				<a href="#" class="link color-main mx-15">Profile</a>
				<a href="#" class="link color-main mx-15">Blog</a>
				<a href="about.html" class="link color-main mx-15">About</a>
				<a href="#" class="link color-main mx-15">Shop</a>
				<a href="reclamation.html" class="link color-main mx-15">Reclamation</a>

				<a href="#" class="link color-main mx-15"><i class="fas fa-search"></i></a>
			</div>
			<div class="mt-20 mt-lg-0 col-lg-3 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
				<a href="#" class="mr-20 link color-main">Sign In</a>
				<a href="#" class="btn sm action-2 f-16">Sign Up</a>
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
$mysqli = new mysqli('localhost', 'root', '' ,'yahya');
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
  
  
  
  

<!--rou7 zebda  -->

<section class="container">
			<h2>Liste des Produits</h2>
			<br><br>
			<div class="shop-items">
				<?php
					foreach ($produit as $produit) {
				?>
				<div class="shop-item">
					<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title"><strong><?= $produit['NomP'] ?> </strong> </h4>
                            </div>
                            <div class="row">
					<div class="shop-item-details">
					 <img src="../image/<?= $produit['image'] ?>"height="200" width="200">
						<span class="shop-item-des"><?= $produit['Description1'] ?>  </span>
						<br><br>
						<span class="shop-item-price">Prix: <?= $produit['Prix'] ?> TND </span>
						<br><br>
						<span class="shop-item-date"> Date d'ajout: <?= $produit['DateA'] ?>  </span>
						<br><br>
						<span class="shop-item-des">Genre :<?= $produit['Genre'] ?>  </span>
						<br><br>
						<span class="shop-item-date"> Quantité: <?= $produit['Quantite'] ?>  </span>
						<br><br>
						<a type="button" class="btn sm action-2 f-16" href = "modifierproduit1.php?Id_produit=<?= $produit['Id_produit'] ?>">view</a>
						<a type="button" class="btn sm action-2 f-16" href = "modifierproduit1.php?Id_produit=<?= $produit['Id_produit'] ?>">Ajouter Panier</a> 
						<a type="button" class="btn sm action-2 f-16" href = "#">Whishlist</a>
			<iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fafficherproduitfront.php&layout=button_count&size=small&width=91&height=20&appId" width="91" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
		
</div> <!-- /.row -->
                            <div class="card-body"></div>
                        </div>
                    </div><!-- /# column -->
                </div>
					</div>
				</div>
				<br><br>
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
			<div class="col-lg-4 col-sm-6 text-sm-right text-lg-left order-1 order-lg-0" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
				<a href="about.html" class="mr-15 link color-main">About</a>
				<a href="#" class="mx-15 link color-main">Policy</a>
				<a href="#" class="mx-15 link color-main">Terms</a>
			</div>
			<div class="mt-20 d-flex align-items-center author_info">
					<img  src="i\logo.png" class="w-300 h-300 radius_full" alt="" />
			</div>
			<div class="col-lg-4 col-sm-6 text-sm-left text-lg-right order-2 order-lg-0" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
				<a href="#" class="mr-15 link color-main">Contacts</a>
				<a href="#" class="mx-15 link color-main"><i class="fab fa-twitter"></i></a>
				<a href="#" class="mx-15 link color-main"><i class="fab fa-facebook-square"></i></a>
				<a href="#" class="ml-15 link color-main"><i class="fab fa-google-plus-g"></i></a>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="mt-10 col-xl-4 col-lg-5 col-md-6 col-sm-8" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
				<div class="color-heading text-adaptive">
					Be sure to take a look at our <a href="#" class="link color-heading">Terms of Use</a> <br />
					and <a href="#" class="link color-heading">Privacy Policy</a>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- forms alerts -->
<div class="alert alert-success alert-dismissible alert-form-success" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	Thanks for your message!
</div>
<div class="alert alert-warning alert-dismissible alert-form-check-fields" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	Please, fill in required fields.
</div>
<div class="alert alert-danger alert-dismissible alert-form-error" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	An error occurred while sending data 🙁
</div>



<!-- Bootstrap 4.3.1 JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<!-- Fancybox 3 jQuery plugin JS (Open images and video in popup) -->
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<!-- Google maps JS API -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyDP6Ex5S03nvKZJZSvGXsEAi3X_tFkua4U"></script>
<!-- Slick 1.8.1 jQuery plugin JS (Sliders) -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- AOS 2.3.1 jQuery plugin JS (Animations) -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Maskedinput jQuery plugin JS (Masks for input fields) -->
<script src="js/jquery.maskedinput.min.js"></script>
<!-- Startup 3 JS (Custom js for all blocks) -->
<script src="js/script.js"></script> 

<!--<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v10.0" nonce="1avFbC5g"></script>-->

</body>
</html>
