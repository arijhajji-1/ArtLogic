<?php

require_once '../Controller/reclamationc.php';
require_once '../Model/reclamation.php';
require_once "../Controller/UserC.php";
require_once '../Model/User.php';
session_start();
  
   

  

if (isset($_SESSION['id_user']) &&isset($_POST['description_reclamation']) && isset($_POST['type_reclamation']) ) {
    $reclamation = new reclamation($_SESSION['id_user'],$_POST['description_reclamation'], $_POST['type_reclamation']);
 $reclamationc =  new reclamationc();
    $reclamationc->ajouterreclamation($reclamation);
    header('Location:reclamations.php');
}



?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" >
		<title>ArtLogic</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="refresh" content="LETEMPSICIENSECONDE; URL=chat.php">
				<link rel="icon" href="../i/favicon.png" type="image/x-icon">
		<!-- Google Fonts -->
				<link href="https://fonts.googleapis.com/css?family=Rubik:100,200,300,400,600,500,700,800,900|Karla:100,200,300,400,500,600,700,800,900&amp;subset=latin" rel="stylesheet">
				<!-- Bootstrap 4.3.1 CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		    <link href="../css/styles.css" rel="stylesheet">
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
					    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

				<!-- jQuery 3.3.1 -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
      <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

			</head> 
	<body>
<!-- Navigation 1 -->

<nav class="navigation_1 bg-light pt-30 pb-30 text-center">
	<div class="container px-xl-0">
		<div class="row justify-content-center align-items-center f-16">
			<div class="mt-20 d-flex align-items-center author_info">
				<a href="index.html" class="link color-main mx-15"><img  src="../i/logo.png" class="w-300 h-300 radius_full" alt="" /></a>
				<div class="col-lg-6" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
				<a href="index.html" class="link color-main mx-15">Home</a>
				<a href="AfficheUser.php" class="link color-main mx-15">Profile</a>
				<a href="#" class="link color-main mx-15">Blog</a>
				<a href="#" class="link color-main mx-15">About</a>
				<a href="chat.php" class="link color-main mx-15">messagerie</a>

				<a href="galerie.php" class="link color-main mx-15">Shop</a>
				<a href="#" class="link color-main mx-15"><i class="fas fa-search"></i></a>
			</div>
			<div class="mt-20 mt-lg-0 col-lg-3 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
				<a href="login.php" class="mr-20 link color-main">Sign In</a>
				<a href="AjouterUser.php" class="btn sm action-2 f-16">Sign Up</a>
			</div>
		</div>
	</div>
</nav>






<!-- Form 1 -->

<section class="form_2 pt-120 pb-120">
	<div class="container px-xl-10">
		<form action="" method="POST" class="bg-light mx-auto mw-430 radius10 pt-40 px-50 pb-30">
			<h2 class="mb-40 small text-center">Réclamation</h2>
			<div>
			<input type="hidden" name="id_client" value="" />
		</div>
			<div class="mb-20 input_holder" >
				<input type="text" name="type_reclamation" placeholder="objet" class="input border-gray focus-action-1 color-heading placeholder-heading w-full" required />
			</div>
			
			
			

<div class="mb-50 input_holder" >
				<input type="text" name="description_reclamation" placeholder="write here" class="input border-gray focus-action-1 color-heading placeholder-heading w-300 h-300" required />
			</div>
			<div >
				<input type="submit" value ="Envoyer" name="submit" onclick="" class="mt-25 btn2 action-1 w-full">
			</div>
			
		</form>
	</div>
</section>

<!-- Footer 1 -->

<footer class="footer_1 bg-light pt-75 pb-65 text-center">
	<div class="container px-xl-0">
		<div class="row justify-content-between align-items-center lh-40 links">
			<div class="col-lg-4 col-sm-6 text-sm-right text-lg-left order-1 order-lg-0" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
				<a href="about.html" class="mr-15 link color-main">About</a>
				<a href="#" class="mx-15 link color-main">Policy</a>
				<a href="#" class="mx-15 link color-main">Terms</a>
			</div>
			<div class="mt-20 d-flex align-items-center author_info">
					<img  src="../i/logo.png" class="w-300 h-300 radius_full" alt="" />
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

</body>
</html>