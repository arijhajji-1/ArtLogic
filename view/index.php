<?php


include "../Controller/evenementC.php";
$evenementC=new evenementC();
$listeevenement=$evenementC->afficherEvenement();
session_start();
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
    <link href="../css/styler.css" rel="stylesheet">
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
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
    <link href="../assets/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styler.css">

    <!-- jQuery 3.3.1 -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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
<!-- Navigation 1 -->

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

<!-- Feature 2 -->

<section id="hero" class="d-flex flex-column justify-content-center align-items-center text-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
        <h1>Welcome to <span>ArtLogic</span></h1>
        <h2>Nice To See you here</h2>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
</section>
<!-- Content 2 -->

<section class="content_2 bg-light pt-105 pb-95 ">
    <div class="container px-xl-0 text-center">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
                <h2> Enjoy </h2>
            </div>
            <div class="col-xl-7 col-lg-9 col-md-10" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
                <div class="mt-35 f-18 medium color-heading op-7 text-adaptive">
                    We have created this platform to help artists publish their artwork.				</div>
            </div>
        </div>
    </div>
</section>

<!-- Showcase 2 -->

<section class="showcase_2 bg-light pt-105 pb-90 text-center">
    <div class="container px-xl-0">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <h2 class="small" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">Gallery</h2>
                <div class="mt-15 mb-25 f-22 color-heading text-adaptive" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
                <a href="#" class="mt-50 link color-main">
                    <img srcset="../i/NejibZneidi.jpg 2x" src="../i/NejibZneidi.jpg" class="radius10 img-fluid" alt="" />
                    <div class="color-heading f-14 semibold text-uppercase sp-20">Nejib Zneidi</div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
                <a href="#" class="mt-50 link color-main">
                    <img srcset="../i/mouradChaaba.jpg 2x" src="../i/mouradChaaba.jpg" class="radius10 img-fluid" alt="" />

                    <div class="color-heading f-14 semibold text-uppercase sp-20">Mourad Chaaba</div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6" data-aos-duration="600" data-aos="fade-down" data-aos-delay="600">
                <a href="#" class="mt-50 link color-main">
                    <img srcset="../i/AbdelaziziGorgi.jpg " src="../i/AbdelaziziGorgi.jpg" class="radius10 img-fluid" alt="" />

                    <div class="color-heading f-14 semibold text-uppercase sp-20">Abdlaziz Gorgi</div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
                <a href="#" class="mt-50 link color-main">
                    <img srcset="../i/AliGuermassi.jpg 2x" src="../i/AliGuermassi.jpg" class="radius10 img-fluid" alt="" />

                    <div class="color-heading f-14 semibold text-uppercase sp-20">Ali Guermassi</div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
                <a href="#" class="mt-50 link color-main">
                    <img srcset="../i/Nasreddine .jpg 2x" src="../i/Nasreddine.jpg" class="radius10 img-fluid" alt="" />

                    <div class="color-heading f-14 semibold text-uppercase sp-20">Nasreddine EL Assaly</div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6" data-aos-duration="600" data-aos="fade-down" data-aos-delay="600">
                <a href="#" class="mt-50 link color-main">
                    <img srcset="../i/Aliznaidi.jpg 2x" src="../i/Aliznaidi.jpg" class="radius10 img-fluid" alt="" />

                    <div class="color-heading f-14 semibold text-uppercase sp-20">Ali Znaidi</div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Table 2 -->
<div class="content">

    <div class="container ">
        <div class="row mb-5 ">
            <div class="col-12 text-center">
                <h2 class="my-5">Evenement</h2>
            </div>
        </div>
    </div>


    <div class="site-section bg-left-half mb-5">
        <div class="container owl-2-style">

            <div class="owl-carousel owl-2">
                <?PHP
                foreach($listeevenement as $Evenenement){
                    $image = $Evenenement['ImageEvenement']; // source iamge

                    ?>
                    <div class="media-29101">
                        <img src="../i/<?PHP echo $image ?>" alt="Texte Alternatif" width="100" height="100">
                        <h3><b><?PHP echo $Evenenement['TitreEvenement']; ?></b></h3>
                        <p><?PHP echo $Evenenement['DateEvenement']; ?> |<?PHP echo $Evenenement['DureeEvenement']; ?> jour(s) <br> Description: <br> <?PHP echo $Evenenement['DescriptionEvenement']; ?></p>
                    </div>
                <?PHP  } ?>
            </div>

        </div>
    </div>

</div>



<!-- Testimonial 1 -->

<section class="testimonial_1 bg-light pt-80 pb-80">
    <div class="container px-xl-0">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-11" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
                <div class="hr bg-gray h-2"></div>
            </div>
        </div>
        <div class="row pt-30 pb-50 inner" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
            <div class="col-xl-2 col-lg-1"></div>
            <div class="col-md-1 col-sm-2">
                <i class="fas fa-quote-left f-36 color-gray"></i>
            </div>
            <div class="col-xl-7 col-lg-8 col-sm-10">
                <div class="pt-10 f-22 text-adaptive">
                    GRÂCE AU DESSIN, ON ARRIVE À DIALOGUER, À DÉBATTRE, À ÉCHANGER, À ABATTRE LES MURS
                </div>
                <div class="mt-20 d-flex align-items-center author_info">
                    <img srcset="../i/nedia.jpeg 2x" src="../i/nedia.jpeg" class="w-60 h-60 radius_full" alt="" />
                    <div class="ml-15 color-heading f-14 semibold text-uppercase sp-20">Nadia Khiari, Tunisie</div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-11" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
                <div class="hr bg-gray h-2"></div>
            </div>
        </div>
    </div>
</section>


<!-- Footer 1 -->

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