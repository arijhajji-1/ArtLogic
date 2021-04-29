<?php
require_once "../Controller/UserC.php";
require_once '../Model/User.php';

session_start();
$email= $_SESSION['email'];
$pass= $_SESSION['mot_de_passe'];
$UserC = new UserC();
$User = $UserC->getUser($email,$pass);
if(isset($_POST['sign_out']))
{
   // session_destroy();

    $_SESSION['email'] = "";
    $_SESSION['mot_de_passe'] =  "";
    $_SESSION['id_user'] = 0;
    header('Location:index.html');
}
foreach ($User as $user) {
$id = $user['id_user'];
}
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['role']) && isset($_POST['pseudo'])   && isset($_POST['mot_de_passe']) && isset($_POST['sexe']) && isset($_POST['date_de_naissance']) && isset($_POST['adresse']) && isset($_POST['numero_telephone']) ) {
    $role = $_POST['role'];
    if ($role == 1) {
        $User = new User($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['pseudo'], $_POST['role'], $_POST['mot_de_passe'], $_POST['sexe'], $_POST['date_de_naissance'], $_POST['adresse'], $_POST['Matricule_fiscale'], $_POST['Type_produit'], $_POST['numero_telephone']);
    } else if ($role == 0) {
        $User = new User($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['pseudo'], $_POST['role'], $_POST['mot_de_passe'], $_POST['sexe'], $_POST['date_de_naissance'], $_POST['adresse'], '0', 'NULL', $_POST['numero_telephone']);
    }


   $UserC->modifierUser($User,$id);

    header('Location:AfficheUser.php');
}
if(isset($_POST['sign_out']))
{
    session_destroy();
    header('Location:index.html');
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
    <!-- jQuery 3.3.1 -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</head>

<body>
<!-- Navigation 1 -->

<nav class="navigation_1 bg-light pt-30 pb-30 text-center">
    <div class="container px-xl-0">
        <div class="row justify-content-center align-items-center f-16">
            <div class="mt-20 d-flex align-items-center author_info">
                <a href="index.html" class="link color-main mx-15"><img  src="../i/logo.png" class="w-300 h-300 radius_full" alt="" /></a>
                <div class="col-lg-6" >
                    <a href="index.html" class="link color-main mx-15">Home</a>
                    <a href="AfficheUser.php" class="link color-main mx-15">Profile</a>
                    <a href="#" class="link color-main mx-15">Blog</a>
                    <a href="#" class="link color-main mx-15">About</a>
                    <a href="galerie.php" class="link color-main mx-15">Shop</a>
                    <a href="#" class="link color-main mx-15"><i class="fas fa-search"></i></a>
                </div>
                <div class="mt-20 mt-lg-0 col-lg-3 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                    <a href="login.php" class="mr-20 link color-main">Sign In</a>
                </div>
            </div>
        </div>
</nav>


    <section class="form_1 pt-120 pb-120">
        <?php
        foreach ($User as $user)
        {
        ?>
        <div class="container px-xl-0">
            <form action="" method = "POST" class="bg-light mx-auto mw-430 radius10 pt-40 px-50 pb-30">
                <h2 class="mb-40 small text-center">Sign Up Now</h2>
                <div class="mb-20 input_holder">
                    <input type="text" name="nom" value="<?= $user['nom_user']?>" class="input border-gray focus-action-1 color-heading placeholder-heading w-full" />
                </div>
                <div class="mb-20 input_holder" >
                    <input type="text" name="prenom" value="<?= $user['prenom_user']?>" class="input border-gray focus-action-1 color-heading placeholder-heading w-full" />
                </div>
                <div class="mb-20 input_holder" >
                    <input type="email" name="email" value="<?= $user['Email_user']?>" class="input border-gray focus-action-1 color-heading placeholder-heading w-full"/>
                </div>
                <div class="mb-20 input_holder">
                    <input type="text" name="pseudo" value="<?= $user['pseudo_user']?>" class="input border-gray focus-action-1 color-heading placeholder-heading w-full"/>
                </div>
                <div class="mb-20 input_holder">
                    <select name="sexe" id="sexe_user" class="input border-gray focus-action-1 color-heading placeholder-heading w-full" >
                        <option value="<?= $user['sexe_user']?>"><?php
                            if($user['sexe_user'] == "male")
                                echo "Male";
                            else if(($user['sexe_user'] =="female"))
                                echo "Female";
                            ?></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="mb-20 input_holder">
                    <input type="date" id="start" name="date_de_naissance" value="<?= $user['date_de_naissance_user']?>"
                           min="1950-01-01" max="2003-04-22" class="input border-gray focus-action-1 color-heading placeholder-heading w-full">
                </div>
                <div class="mb-20 input_holder">
                    <input type="tel" name="numero_telephone" value="<?= $user['numero_telephone_user']?>" class="input border-gray focus-action-1 color-heading placeholder-heading w-full"/>
                </div>
                <div class="mb-20 input_holder" >
                    <select name="role" id="role_user" onchange = "ShowHideDiv()" class="input border-gray focus-action-1 color-heading placeholder-heading w-full" >
                        <option value="<?= $user['Role_user']?>"><?php
                            if($user['Role_user'] == "0")
                                echo "Client";
                            else if(($user['Role_user'] =="1"))
                                echo "Seller";
                            ?></option>
                        <option value="0">Client</option>
                        <option value="1">Seller</option>
                    </select>
                </div>
                <?php
                            if($user['Role_user'] == "0") {
                                ?>
                                <div id="matricule_fiscale" style="display: none" class="mb-20 input_holder">
                                    <input type="text" name="Matricule_fiscale"
                                           value="0" placeholder="Registration number"
                                    class="input border-gray focus-action-1 color-heading placeholder-heading w-full"/>
                                </div>
                                <div id="type_produit" style="display: none" class="mb-20 input_holder">
                                    <input type="text" name="Type_produit"
                                           value="NULL" placeholder="Product type" class="input
                                    border-gray focus-action-1 color-heading placeholder-heading w-full"/>
                                </div>
                                <?php
                            }if($user['Role_user'] == "1")
                {?>
                    <div id="matricule_fiscale"  class="mb-20 input_holder">
                                    <input type="text" name="Matricule_fiscale"
                                           value=<?= $user['matricule_fiscale_user'] ?> placeholder="Registration number" class="input border-gray focus-action-1 color-heading placeholder-heading w-full"/>
        </div>
        <div id="type_produit"  class="mb-20 input_holder">
            <input type="text" name="Type_produit"  value=<?= $user['type_produit'] ?> placeholder="Product type" class="input border-gray focus-action-1 color-heading placeholder-heading w-full"/>
        </div>
                <?php
                }
        ?>
                <div class="mb-20 input_holder">
                    <input type="text" name="adresse" value="<?= $user['adresse_user']?>" class="input border-gray focus-action-1 color-heading placeholder-heading w-full"/>
                </div>
                <div class="mb-20 input_holder">
                    <input type="password" name="mot_de_passe" value="<?= $user['mot_de_passe']?>" class="input border-gray focus-action-1 color-heading placeholder-heading w-full"/>
                </div>
                <div>
                    <input type="submit" value="Modify an Account" name = "submit" class="mt-25 btn action-1 w-full"   >
                </div>
                <div>
                    <a type="button" class="mt-25 btn action-1 w-full" href = "AfficheWishList.php">Wish List</a>
                </div>
                <div>
                    <input type="submit" value="Sign out" name = "sign_out" class="mt-25 btn action-1 w-full"   >
                </div>
            </form>
        </div>
    </section>
<?php
}
?>
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
<script>
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

