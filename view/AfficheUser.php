<?php
require_once "../Controller/UserC.php";
require_once '../Model/User.php';

session_start();
if(empty($_SESSION))
{
    header('location:login.php');
}
else
{
    $email= $_SESSION['email'];
    $pass= $_SESSION['mot_de_passe'];
}

$UserC = new UserC();
$User = $UserC->getUser($email);

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
    <link href="../css/profile2.css" rel="stylesheet" id="bootstrap-css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

<div class="container emp-profile">
    <form method="post">
        <?php
        foreach ($User as$user) {
            ?>
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="../i/<?php echo $user['image'] ;?>" alt="photo "/>
                        <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input type="file" name="file"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            <?php echo $user['nom_user'].' '.$user['prenom_user']; ?>
                        </h5>
                        <h6>
                            <?php
                            if($user['Role_user']==0)
                            {
                                echo 'Client';
                            }else if($user['Role_user']==1)
                            {
                                echo 'Seller';
                            }else
                            {
                                echo 'Admin';
                            }
                                ?>
                        </h6>

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                   aria-controls="home" aria-selected="true">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="modifierUsers.php" class="profile-edit-btn">Edit Profile</a>
                    <br>
                    <br>
                    <a href="commandeses.php" class="profile-edit-btn">Mes commandes</a>
                    <br>
                    <br>
                    <a href="listreclamation.php" class="profile-edit-btn">List Reclamation</a>
                    <br>
                    <br>
                    <a href="afficherlivraisonfront.php" class="profile-edit-btn">List Livraison</a>
                </div>
            </div>
            <div class="row">

                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-6">
                                    <?php echo $user['nom_user'] ;?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Last Name</label>
                                </div>
                                <div class="col-md-6">
                                    <?php echo $user['prenom_user'] ;?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Pseudo</label>
                                </div>
                                <div class="col-md-6">
                                    <?php echo $user['pseudo_user'] ;?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <?php echo $user['Email_user'] ;?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-6">
                                    <?php echo $user['numero_telephone_user'] ;?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Sexe</label>
                                </div>
                                <div class="col-md-6">
                                    <?php echo $user['sexe_user'] ;?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Date of Birth</label>
                                </div>
                                <div class="col-md-6">
                                    <?php echo $user['date_de_naissance_user'] ;?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Adress</label>
                                </div>
                                <div class="col-md-6">
                                    <?php echo $user['adresse_user'] ;?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Creation Date</label>
                                </div>
                                <div class="col-md-6">
                                    <?php
                                    $time = strtotime($user['cree_a_user']);
                                    $DateDeCreation = date('Y-m-d',$time);
                                    echo $DateDeCreation ;?>
                                </div>
                            </div> <?php
                            if($user['Role_user']==1) {
                            ?>
                            <div class="row">
                                    <div class="col-md-6">
                                        <label>Tax Identification Number</label>
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo $user['matricule_fiscale_user']; ?>
                                    </div>
                            </div>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Experience</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Expert</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Hourly Rate</label>
                                </div>
                                <div class="col-md-6">
                                    <p>10$/hr</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Total Projects</label>
                                </div>
                                <div class="col-md-6">
                                    <p>230</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>English Level</label>
                                </div>
                                <div class="col-md-6">
                                    <p>Expert</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Availability</label>
                                </div>
                                <div class="col-md-6">
                                    <p>6 months</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Your Bio</label><br/>
                                    <p>Your detail description</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </form>
</div>


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

