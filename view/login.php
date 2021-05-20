<?php
require_once '../connexion.php';
require_once('../view/settings.php');

if (isset($_POST['email'])){
    $email_client=$_POST['email'];
    $mot_passe=$_POST['password'];

    $sql="SELECT * FROM users WHERE Email_user='" . $email_client . "' && mot_de_passe = '". $mot_passe."' ";
    $db = getConnexion();
    try {

        $query = $db->prepare($sql);
        $query->execute();
        $count = $query->rowCount();
        if ($count == 1) {
            session_start();
            $user = $query->fetch();
            if($user['verification']==1) {
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['mot_de_passe'] = $_POST['password'];
                $_SESSION['id_user'] = $user['id_user'];
                $_SESSION['pseudo_user'] = $user['pseudo_user'];
                $_SESSION['image'] = $user['image'];
                $_SESSION['role'] = $user['Role_user'];
                $_SESSION['numero_telephone_user'] = $user['numero_telephone_user'];
                if ($user['Role_user'] == 2) {
                    header('Location:administrateur.php');
                } else {
                    header('Location:AfficheUser.php');
                }
            } else if($user['verification']==0)
            {
                header('Location:login_erreur_verif.php');
            }
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
    <meta charset="utf-8" >
    <title>ArtLogic Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../i/logo.png" type="image/x-icon">
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
    <link href="../css/profile2.css" rel="stylesheet" />
    <!-- jQuery 3.3.1 -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</head>

<body>

<!-- Navigation 1 -->
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

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


                </div>
            </div>
    </nav>


<section class="container back">
<div id="container" class="container px-xl-0">

    <form action="login.php"  method = "post" class="bg-light mx-auto mw-430 radius10 pt-40 px-50 pb-30">
        <h2 class="mb-40 small text-center" d>Sign in</h2>

        <input type="email" placeholder="Email" name="email"  class="input border-gray focus-action-1 color-heading placeholder-heading w-full" required >
        <br>
        <br>
        <input type="password" placeholder="Entrer le mot de passe"  minlength="8" name="password" class="input border-gray focus-action-1 color-heading placeholder-heading w-full" required >
        <br>
        <br>
        <input type="submit" name="submitButton" id="submitButton" value="LOGIN"  class="button" >
        <br>
        <br>
        <input type="image" name="submit" id="submit" src="../i/google.png" height="50" width="330"   onclick ="window.location ='<?php echo $login_url; ?>'">

    </form>
</div>
</section>
<!-- Footer 1 -->
<footer class="footer_1 bg-light pt-75 pb-65 text-center">
    <div class="container px-xl-0">
        <div class="row justify-content-between align-items-center lh-40 links">
            <div class="col-lg-4 col-sm-6 text-sm-right text-lg-left order-1 order-lg-0" >
                <a href="#" class="mr-15 link color-main">About</a>
                <a href="#" class="mx-15 link color-main">Policy</a>
                <a href="#" class="mx-15 link color-main">Terms</a>
            </div>
            <div class="mt-20 d-flex align-items-center author_info">
                <a href="index.html" class="link color-main mx-15"><img  src="../i/logo.png" class="w-300 h-300 radius_full" alt="" /></a>
            </div>
            <div class="col-lg-4 col-sm-6 text-sm-left text-lg-right order-2 order-lg-0">
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
