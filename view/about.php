<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8" >
		<title>ArtLogic</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="../assets/img/logo.png" type="../assets/img/logo.png">
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
    <link href="../css/session.css" rel="stylesheet" />
		<!-- my css -->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda+One">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	</head> 
    <body class="sb-nav-fixed">
            <!-- header-->
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
                                            <a href="reclamations.php" class="dropdown-item"><i class="fas fa-poll-h"></i> Reclamation</a></a>
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
            <!-- Contient -->
            <link rel="stylesheet" href="../css/nicepage.css" media="screen">
            <link rel="stylesheet" href="../css/Accueil.css" media="screen">
            <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
            <script class="u-script" type="text/javascript" src="../js/nicepage.js" defer=""></script>
            <section class="u-clearfix u-image u-section-1" id="carousel_143a" data-image-width="662" data-image-height="750">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-grey-5 u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                 <!-- <h5 class="u-text u-text-1">Artlogic</h5>-->
                 <img src="../assets/img/logo.png" alt="">
                </div>
              </div>
              <div class="u-align-center u-container-style u-grey-5 u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-2">
                  <p class="u-text u-text-grey-50 u-text-2">At Artlogic.com ,we believe every Artist deserves to have an online store , innovation and simplicity makes us happy ; our goal is to remove any  barriers that can prevent artists form selling their masterpieces , we are exicted as group CodeBrewers to help you on your journey !</p>
                  <div class="u-social-icons u-spacing-30 u-social-icons-1">
                    <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b57b"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-b57b"><path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
                    </a>
                    <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0987"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-0987"><path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
                    </a>
                    <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5333"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-5333"><path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
            <!-- footer -->
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
    </body>
</html>
