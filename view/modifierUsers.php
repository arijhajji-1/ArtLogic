<?php
require_once '../Controller/UserC.php';
require_once '../Model/User.php';

session_start();
if(!empty($_SESSION)) {
    $email = $_SESSION['email'];
    $pass = $_SESSION['mot_de_passe'];
    $id = $_SESSION['id_user'];
}
$UserC = new UserC();
$User = $UserC->getUser($email);
if(isset($_POST['sign_out']))
{
    // session_destroy();

    $_SESSION['email'] = "";
    $_SESSION['mot_de_passe'] =  "";
    $_SESSION['id_user'] = 0;
    header('Location:index.html');
}
foreach ($User as $user) {

    $img=$user['image'];
if(!empty($_POST['image']))
{
    $img=$_POST['image'];
}
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['role']) && isset($_POST['pseudo'])   && isset($_POST['mot_de_passe']) && isset($_POST['sexe']) && isset($_POST['date_de_naissance']) && isset($_POST['adresse']) && isset($_POST['numero_telephone']) ) {
    $role = $_POST['role'];
    if($role == 1)
    {$User = new User($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['pseudo'], $_POST['role'], $_POST['mot_de_passe'], $_POST['sexe'], $_POST['date_de_naissance'], $_POST['adresse'],$_POST['Matricule_fiscale'],$_POST['Type_produit'],$_POST['numero_telephone'],$user['VerifiKey'],$img);}
    else if($role == 0)
    {$User = new User($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['pseudo'], $_POST['role'], $_POST['mot_de_passe'], $_POST['sexe'], $_POST['date_de_naissance'], $_POST['adresse'],'0','NULL',$_POST['numero_telephone'],$user['VerifiKey'],$img);}

    $UserC->modifierUser($User,$id);
    header('Location:AfficheUser.php');
}}
?>
<!DOCTYPE html>
<html lang="fr">

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
    <link href="../css/profile2.css" rel="stylesheet" />
    <!-- jQuery 3.3.1 -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</head>

<body>
<!-- Navigation 1 -->


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
            </div>
    </nav>


<section class="container back">

    <div class="container px-xl-0">
        <form action="" method = "POST" class="bg-light mx-auto mw-430 radius10 pt-40 px-50 pb-30">
            <?php
            foreach ($User as $user)
            {
            ?>
            <h2 class="mb-40 small text-center" >Modify
                an account</h2>
            <div class="mb-20 input_holder" >
                <input type="text" name="nom" value="<?= $user['nom_user'] ?>"
                       class="input border-gray focus-action-1 color-heading placeholder-heading w-full"/>
            </div>
            <div class="mb-20 input_holder" >
                <input type="text" name="prenom" value="<?= $user['prenom_user'] ?>"
                       class="input border-gray focus-action-1 color-heading placeholder-heading w-full"/>
            </div>
            <div class="mb-20 input_holder" >
                <input type="email" name="email" value="<?= $user['Email_user'] ?>"
                       class="input border-gray focus-action-1 color-heading placeholder-heading w-full"/>
            </div>
            <div class="mb-20 input_holder" >
                <input type="text" name="pseudo" value="<?= $user['pseudo_user'] ?>"
                       class="input border-gray focus-action-1 color-heading placeholder-heading w-full"/>
            </div>
            <div class="mb-20 input_holder">
                <input type="file" name="image"  placeholder="Your photo" accept="image/png, image/jpeg" />
            </div>
            <div class="mb-20 input_holder" >
                <select name="sexe" id="sexe_user"
                        class="input border-gray focus-action-1 color-heading placeholder-heading w-full">
                    <option value="<?php $user['sexe_user'] ?>"><?php if ($user['sexe_user'] == "male") {
                            echo "Male";
                        } else echo "Female"; ?></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="mb-20 input_holder" >
                <input type="date" id="start" name="date_de_naissance"
                       value="<?= $user['date_de_naissance_user'] ?>"
                       min="1950-01-01"
                       class="input border-gray focus-action-1 color-heading placeholder-heading w-full">
            </div>
            <div class="mb-20 input_holder" >
                <input type="tel" name="numero_telephone" value="<?= $user['numero_telephone_user'] ?>"
                       class="input border-gray focus-action-1 color-heading placeholder-heading w-full"/>
            </div>
            <div class="mb-20 input_holder" >
                <select name="role" id="role_user" onchange="ShowHideDiv()"
                        class="input border-gray focus-action-1 color-heading placeholder-heading w-full">
                    <option value="<?= $user['Role_user'] ?>"><?php if ($user['Role_user'] == 0) {
                            echo "Client";
                        } else echo "Seller"; ?></option>
                    <option value="0">Client</option>
                    <option value="1">Seller</option>
                </select>
            </div>
            <div id="matricule_fiscale" style="display: none" class="mb-20 input_holder" d>
                <input type="text" name="Matricule_fiscale" value="<?= $user['matricule_fiscale_user'] ?>"
                       placeholder="Registration number"
                       class="input border-gray focus-action-1 color-heading placeholder-heading w-full"/>
            </div>
            <div id="type_produit" style="display: none" class="mb-20 input_holder"  >
                <input type="text" name="Type_produit" value="<?= $user['type_produit'] ?>" placeholder="Product type"
                       class="input border-gray focus-action-1 color-heading placeholder-heading w-full"/>
            </div>
            <div class="mb-20 input_holder" >
                <input type="text" name="adresse" value="<?= $user['adresse_user'] ?>"
                       class="input border-gray focus-action-1 color-heading placeholder-heading w-full"/>
            </div>
            <div class="mb-20 input_holder" >
                <input type="password" name="mot_de_passe" value="<?= $user['mot_de_passe'] ?>"
                       class="input border-gray focus-action-1 color-heading placeholder-heading w-full"/>
            </div>

            <div >
                <input type="submit" value="Update" name="submit" class="button">
            </div>
        </form>
        <?php
        }
        ?>
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
                <img  src="../i\logo.png" class="w-300 h-300 radius_full" alt="" />
            </div>
            <div class="col-lg-4 col-sm-6 text-sm-left text-lg-right order-2 order-lg-0" >
                <a href="#" class="mr-15 link color-main">Contacts</a>
                <a href="#" class="mx-15 link color-main"><i class="fab fa-twitter"></i></a>
                <a href="#" class="mx-15 link color-main"><i class="fab fa-facebook-square"></i></a>
                <a href="#" class="ml-15 link color-main"><i class="fab fa-google-plus-g"></i></a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="mt-10 col-xl-4 col-lg-5 col-md-6 col-sm-8" >
                <div class="color-heading text-adaptive">
                    Be sure to take a look at our <a href="#" class="link color-heading">Terms of Use</a> <br />
                    and <a href="#" class="link color-heading">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript">
    $(function () {
        $("#role_user").change(function () {
            if ($(this).val() == "1") {
                $("#matricule_fiscale").show();
                $("#type_produit").show();

            } else {
                $("#matricule_fiscale").hide();
                $("#type_produit").hide();
            }
        });
    });
</script>

</body>

</html>