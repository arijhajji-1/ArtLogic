<?php
require_once "../Controller/UserC.php";
require_once '../Model/User.php';

session_start();
$email= $_SESSION['email'];
$pass= $_SESSION['mot_de_passe'];
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
    <link href="../css/profile.css" rel="stylesheet" id="bootstrap-css" />
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
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


                <div class="panel panel-info" >
                    <div class="panel-heading">
                        <h4 class="panel-title">Profile</h4>
                    </div>
                    <br>
                    <div class="panel-body">
                        <div class="row">


                            <?php
                            foreach ($User as $liste)
                            {

                            ?>
                            <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../i/<?php echo $liste['image']?>" width="75"  height="75" class="img-circle img-responsive"> </div>
                            <div class=" col-md-9 col-lg-9 ">
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>Role:</td>
                                        <td><?php
                                            if($liste['Role_user']==0)
                                                echo "Client";
                                            else
                                                echo "Seller";   ?></td>
                                    </tr>
                                    <tr>
                                        <td>Creation date:</td>
                                        <td><?php echo $liste['cree_a_user'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Date of Birth</td>
                                        <td><?php echo $liste['date_de_naissance_user'] ?></td>
                                    </tr>

                                    <tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td><?php echo $liste['sexe_user'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Home Address</td>
                                        <td><?php echo $liste['adresse_user'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>
                                            <a href="<?php echo $liste['Email_user'] ?>"><?php echo $liste['Email_user'] ?></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Phone Number</td>
                                        <td><?php echo $liste['numero_telephone_user'] ?>
                                        </td>


                                    </tr>
                                    <?php
                                    if($liste['Role_user']==1) {
                                        ?>
                                        <tr>
                                        <td>Tax registration number :</td>
                                        <td><?php echo $liste['matricule_fiscale_user'] ?>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>Type of product :</td>
                                        <td><?php echo $liste['type_produit'] ?>
                                        </td>
                                        </tr>
                                        <?php
                                    }
                                    }
                                    ?>
                                    </tbody>
                                </table>

                                <a href="modifierUsers.php" class="btn btn-primary">Edit Profile</a>
                                <a href="AfficheWishList.php" class="btn btn-primary">Wish List</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>

                </div>
            </div>
        </div>
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

<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

</body>
</html>

