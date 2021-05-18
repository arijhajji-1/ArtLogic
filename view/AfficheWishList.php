<?php
require_once "../Controller/produitC.php";
require_once '../Model/produit.php';
require_once "../Controller/wishlisteC.php";
require_once '../Model/wishliste.php';
session_start();

$wishlisteC = new wishlisteC();
$id=$_SESSION['id_user'];
$wishliste = $wishlisteC->afficherWP($id);
if(isset ($_POST['submit']))
{
    $wishliste = $wishlisteC->supprimerWP($_POST['ID']);
    header('Location=AfficheWishList.php');
$wishliste = $wishlisteC->afficherWP($id);
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" >
    <title>ArtLogic Sign up</title>
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
    <link href="../css/wishlist.css" rel="stylesheet" />
    <!-- jQuery 3.3.1 -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
<!-- Navigation 1 -->

<nav class="navigation_1 bg-light pt-30 pb-30 text-center">
    <div class="container px-xl-0">
        <div class="row justify-content-center align-items-center f-16">
            <div class="mt-20 d-flex align-items-center author_info">
                <a href="index.html" class="link color-main mx-15"><img  src="../i/logo.png" class="w-300 h-300 radius_full" alt="" /></a>
                <div class="col-lg-6" >
                    <a href="index.php" class="link color-main mx-15">Home</a>
                    <a href="AfficheUser.php" class="link color-main mx-15">Profile</a>
                    <a href="#" class="link color-main mx-15">Blog</a>
                    <a href="#" class="link color-main mx-15">About</a>
                    <a href="afficherproduitfront.php" class="link color-main mx-15">Shop</a>
                    <a href="reclamations.php" class="link color-main mx-15">Reclamation</a>
                    <a href="chat.php" class="link color-main mx-15">Messagerie</a>
                     <a href="#" class="link color-main mx-15">panier</a>
                    <a href="#" class="link color-main mx-15"><i class="fas fa-search"></i></a>
                </div>
            </div>
        </div>
</nav>


<section class="our-publication pt-100 pb-70">
    <div class="container">
        <form method="post">
            <div >
                <div class="col-sm-6 col-lg-3">
            <table >

        <?php
        $i=0;
        foreach ($wishliste as $wish ) {
            ?>
                <?php
                if($i<4)
                {
                    $i++;

                }else if($i=3) {
                ?>

                <tr >
                    <?php
                    }
                        ?>


                <td style="padding-left: 100px">

                    <div class="single-publication">
                        <figure>

                                <img src="../i/<?php echo $wish['image'];?>" height="270" width="250" alt="Publication Image">
                            <ul>
                                <li><i class="fa fa-trash"> <input type="submit" value="Delete" name="submit" id="submit"   >
                                            <input type="hidden" value="<?PHP echo $wish['id_wishlist']; ?>" name="ID"></i></li>

                            </ul>
                        </figure>

                        <div class="publication-content">
                            <span class="category"><?php echo $wish['Genre'];?></span>
                                <h3><?php echo $wish['NomP'];?></h3>

                            <?php if($wish['nouveauPrix']==0) { ?>
                                <h5 class="price"><?php echo $wish['Prix']; ?> TND </h5>

                            <?php } else { ?>
                                <h5 class="price"> <?php echo $wish['nouveauPrix'] . ' TND'; ?>  <span><?php echo $wish['Prix'] . ' TND'; ?></span> </h5>

                                <?php
                            }
                            ?>

                        </div>

                        <div class="add-to-cart">
                            <input type="submit" value="Add to card" name="submit" id="submit" class="default-btn"   >
                        </div>
                    </div>
                </div>


            </div>
            </td>

            <?php
            if($i==3)
            {
                $i=0;
                ?>
        </tr>
<?php
            }
            ?>
            <?php
            }
            ?>
            <br>

            </table>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</body>
</html>

