<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" >
    <<meta name="viewport" content="width=device-width, initial-scale=1">
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
    <title>Acheter via PayPal</title>
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


<div align="center">
<!-- Le conteneur des boutons PayPal -->
<div id="paypal-boutons"></div>

<!-- 1. Importation de la SDK JavaScript PayPal -->
<script src="https://www.paypal.com/sdk/js?client-id=ARihLWW7p_qff_fIs8w6Dzoxz_9KxNmlZa6SHBcAZLDn1vmID00O9pX2C6kZRLqVInLIT_Wys3C7W0Bs"></script>
<script>
    // 2. Afficher le bouton PayPal
    paypal.Buttons({

        // 3. Configurer la transaction
        createOrder : function (data, actions) {

            // Les produits à payer avec leurs details
            var produits = [
                {
                    name : "Produit 1",
                    description : "Description du produit 1",
                    quantity : 1,
                    unit_amount : { value : 9.9, currency_code : "USD" }
                },
                {
                    name : "Produit 2",
                    description : "Description du produit 2",
                    quantity : 1,
                    unit_amount : { value : 8.0, currency_code : "USD" }
                }
            ];

            // Le total des produits
            var total_amount = produits.reduce(function (total, product) {
                return total + product.unit_amount.value * product.quantity;
            }, 0);

            // La transaction
            return actions.order.create({
                purchase_units : [{
                    items : produits,
                    amount : {
                        value : total_amount,
                        currency_code : "USD",
                        breakdown : {
                            item_total : { value : total_amount, currency_code : "USD" }
                        }
                    }
                }]
            });
        },

        // 4. Capturer la transaction après l'approbation de l'utilisateur
        onApprove : function (data, actions) {
            return actions.order.capture().then(function(details) {

                // Afficher Les details de la transaction dans la console
                console.log(details);

                // On affiche un message de succès
                alert(details.payer.name.given_name + ' ' + details.payer.name.surname + ', votre transaction est effectuée. Vous allez recevoir une notification très bientôt lorsque nous validons votre paiement.');

            });
        },

        // 5. Annuler la transaction
        onCancel : function (data) {
            alert("Transaction annulée !");
        }

    }).render("#paypal-boutons");

</script>

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
    <script src="../js/script.js"></script></body>
</html>