<?PHP
    session_start();
	include "../Controller/actualiteC.php";
	$actualiteC=new actualiteC();
	$listeactualite=$actualiteC->afficherActualite();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" >
        <title>ArtLogic</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="../i/favicon.png" type="image/x-icon">
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
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Required meta tags -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda+One">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="../fonts/icomoon/style.css">

        <link rel="stylesheet" href="../css/owl.carousel.min.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/session.css">
        <!-- Style -->
        <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/base.css">
   <link rel="stylesheet" href="../css/vendor.css">  
   <link rel="stylesheet" href="../css/main.css">
        
				<!-- jQuery 3.3.1 -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
			</head> 
	<body>
<!-- Navigation 1 -->
<?php
if($_SESSION['email']=='')
{
?>
<nav class="navigation_1 bg-light pt-30 pb-30 text-center">
    <div class="container px-xl-0">
        <div class="row justify-content-center align-items-center f-16">
            <div class="mt-20 d-flex align-items-center author_info">
                <a href="index.php" class="link color-main mx-15"><img  src="../i/logo.png" class="w-300 h-300 radius_full" alt="" /></a>
                <div class="col-lg-6" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
                    <a href="index.php" class="link color-main mx-15">Home</a>
                    <a href="actualiteFront.php" class="link color-main mx-15">News</a>
                    <a href="about.php" class="link color-main mx-15">About</a>
                    <a href="afficherproduitfront.php" class="link color-main mx-15">Shop</a>
                </div>
                <div class="mt-20 mt-lg-0 col-lg-3 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
                    <a href="login.php" class="mr-20 link color-main">Sign In</a>
                    <a href="AjouterUser.php" class="btn sm action-2 f-16">Sign Up</a>
                </div>

            </div>
        </div>
</nav>
 <?php
}
else if($_SESSION['email']!='') {
    ?>
    <nav class="navigation_1 bg-light pt-30 pb-30 text-center">
        <div class="container px-xl-0">
            <div class="row justify-content-center align-items-center f-16">
                <div class="mt-20 d-flex align-items-center author_info">
                    <a href="index.php" class="link color-main mx-15"><img  src="../i/logo.png" class="w-300 h-300 radius_full" alt="" /></a>
                    <div class="col-lg-6" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
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
<section id="bricks">



	<!-- brick-wrapper -->
  <div class="bricks-wrapper">

	  <div class="grid-sizer"></div>
<?PHP
				foreach($listeactualite as $Actualite){
			    $image = $Actualite['ImageActualite']; // source iamge
		?>
<article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="single-standard.html" class="thumb-link">
				  <img src="../i/<?PHP echo $image ?>" alt="Texte Alternatif" width="300" height="300">             
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				
               				<a ><?PHP echo $Actualite['DateActualite']; ?></a>               				
               			</span>			
               		</div>

               		<h4 class="entry-title"><?PHP echo $Actualite['TitreActualite']; ?></h4>
               		
               	</div>
						<div class="entry-excerpt">
						<br>Description: <br>
						<?PHP echo $Actualite['DescriptionActualite']; ?>						</div>
               </div>

        		</article> 
				<?PHP } ?>
				</div>
				</div>
				
				</section>			

				<footer class="footer_1 bg-light pt-75 pb-65 text-center">
	<div class="container px-xl-0">
		<div class="row justify-content-between align-items-center lh-40 links">
			<div class="col-lg-4 col-sm-6 text-sm-right text-lg-left order-1 order-lg-0" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
				<a href="#" class="mr-15 link color-main">About</a>
				<a href="#" class="mx-15 link color-main">Policy</a>
				<a href="#" class="mx-15 link color-main">Terms</a>
			</div>
			<div class="mt-20 d-flex align-items-center author_info">
				<a href="index.html" class="link color-main mx-15"><img  src="../i/logo.png" class="w-300 h-300 radius_full" alt="" /></a>
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
<script src="../js/jquery.maskedinput.min.js"></script>
<!-- Startup 3 JS (Custom js for all blocks) -->
<script src="../js/script.js"></script>
<script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>