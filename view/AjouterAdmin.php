<?php
require_once '../Controller/UserC.php';
require_once '../Model/User.php';
$UserC =  new UserC();

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email'])  && isset($_POST['pseudo'])   && isset($_POST['mot_de_passe']) && isset($_POST['sexe']) && isset($_POST['date_de_naissance']) && isset($_POST['adresse']) && isset($_POST['numero_telephone'])&& isset($_POST['image']) ) {
    $role = 2;
    if($role == 2)
    {$Vkey=md5(time().$_POST['nom']);
        $User = new User($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['pseudo'], "2", $_POST['mot_de_passe'], $_POST['sexe'], $_POST['date_de_naissance'], $_POST['adresse'],'0','NULL',$_POST['numero_telephone'],$Vkey,$_POST['image']);}
    $sql="SELECT * FROM users WHERE Email_user='" . $_POST['email'] . "' || pseudo_user = '". $_POST['pseudo']."'";
    $db = getConnexion();
    try{

        $query=$db->prepare($sql);
        $query->execute();
        $count=$query->rowCount();
        if($count==0){
            $user=$query->fetch();


            $to =$_POST['email'];
            $subject = 'Welcome to ArtLogic  ';
            $message = $message = 'Bienvenue sur ArtLogic,
 
Pour activer votre compte, veuillez cliquer sur le lien ci-dessous
ou copier/coller dans votre navigateur Internet.
 
http://localhost:63342/ArtLogic/View/verif.php?vkey='.urlencode($Vkey).'
 
 
---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';
            $from = 'From: fourat.halaoua@esprit.tn';

            if (mail($to, $subject, $message,$from)) {
                echo 'Your mail has been sent successfully.';
                $UserC->ajouterUser($User);
            } else {
                echo 'Unable to send email. Please try again.';
            }




            header('Location:administrateur.php');
        }

    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <img src="../i/logo.png" alt="" height="150" width="150" href="index.html" >
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
            <div class="input-group-append">
                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.html">Logout</a>
            </div>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="index.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts1">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Livraison
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="layout-static.html">Livraison</a>
                            <a class="nav-link" href="layout-sidenav-light.html">Livreur</a>
                        </nav>
                    </div>

 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts4" aria-expanded="false" aria-controls="collapseLayouts4">
                              <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                              Produits
                              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                          </a>
                          <div class="collapse" id="collapseLayouts4" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                              <nav class="sb-sidenav-menu-nested nav">
                              <a class="nav-link" href="afficherproduit1.php">Produits</a>
                                  <a class="nav-link" href="affichercategorie1.php">catégories</a>
                              </nav>
                          </div>

                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts8" aria-expanded="false" aria-controls="collapseLayouts8">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Promotions
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts8" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="list.php">List</a>
                                    <a class="nav-link" href="promo.php">promo</a>
                                </nav>
                            </div>
                             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts7" aria-expanded="false" aria-controls="collapseLayouts7">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Reclamation
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts7" aria-labelledby="headingOne1" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="retour.php">Retour</a>
                                    <a class="nav-link" href="listreclamation.html">Messages</a>
                                </nav>
                            </div>
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts9" aria-expanded="false" aria-controls="collapseLayouts9">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Commande
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts9" aria-labelledby="headingOne1" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="retour.php">Commande</a>
                                  
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        User
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne1" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="administrateur.php">administrateur</a>
                            <a class="nav-link" href="clients.php">client</a>
                            <a class="nav-link" href="vendeurs.php">vendeur</a>
                        </nav>
                    </div>
                       <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts5" aria-expanded="false" aria-controls="collapseLayouts5">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Evenement&Actualité
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts5" aria-labelledby="headingOne1" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="evenementForm.php">Add Evenement</a>
                                    <a class="nav-link" href="evenementView.php">View Evenement</a>
                                    <a class="nav-link" href="actualiteForm.php">Add Actualité</a>
                                    <a class="nav-link" href="actualiteView.php">View Actualité</a>
                                </nav>
                            </div>

                          
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="login.html">Login</a>
                                    <a class="nav-link" href="register.html">Register</a>
                                    <a class="nav-link" href="password.html">Forgot Password</a>
                                </nav>
                            </div>
                           
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Code Brewers
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Administrateur
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <section class="form_1 pt-120 pb-120">
                                <div class="container px-xl-0">
                            <form action="" method = "POST" class="bg-light mx-auto mw-430 radius10 pt-40 px-50 pb-30">
                                <h2>Sign Up Admin</h2>
                                <br>
                                <div class="mb-20 input_holder">
                                    <input type="text" name="nom" placeholder="Your Last Name" class="input border-gray focus-action-1 color-heading placeholder-heading w-full" />
                                </div>
                                <br>
                                <div class="mb-20 input_holder" >
                                    <input type="text" name="prenom" placeholder="Your First Name" class="input border-gray focus-action-1 color-heading placeholder-heading w-full" />
                                </div>
                                <br>
                                <div class="mb-20 input_holder" >
                                    <input type="email" name="email" placeholder="Your Email" class="input border-gray focus-action-1 color-heading placeholder-heading w-full"/>
                                </div>
                                <br>
                                <div class="mb-20 input_holder">
                                    <input type="text" name="pseudo" placeholder="Your Pseudo" class="input border-gray focus-action-1 color-heading placeholder-heading w-full"/>
                                </div>
                                <br>
                                <div class="mb-20 input_holder">
                                    <input type="file" name="image" placeholder="Your photo" accept="image/png, image/jpeg" class="input border-gray focus-action-1 color-heading placeholder-heading w-full"/>
                                </div>
                                <br>
                                <div class="mb-20 input_holder">
                                    <select name="sexe" id="sexe_user" class="input border-gray focus-action-1 color-heading placeholder-heading w-full" >
                                        <option value="">--Please choose your sex--</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <br>
                                <div class="mb-20 input_holder">
                                    <input type="date" id="start" name="date_de_naissance"
                                           value="2021-04-15"
                                           min="1950-01-01" max="2003-04-22" class="input border-gray focus-action-1 color-heading placeholder-heading w-full">
                                </div>
                                <br>
                                <div class="mb-20 input_holder">
                                    <input type="tel" name="numero_telephone" placeholder="+123 45 678 910" class="input border-gray focus-action-1 color-heading placeholder-heading w-full"/>
                                </div>
                                <br>
                                <div class="mb-20 input_holder">
                                    <input type="text" name="adresse" placeholder="Your Address" class="input border-gray focus-action-1 color-heading placeholder-heading w-full"/>
                                </div>
                                <br>
                                <div class="mb-20 input_holder">
                                    <input type="password" name="mot_de_passe" placeholder="Your password" class="input border-gray focus-action-1 color-heading placeholder-heading w-full"/>
                                </div>
                                <br>
                                <div>
                                    <input type="submit" value="Ajouter Administrateur" name = "submit" class="btn btn-success"   >
                                </div>
                            </form>
                                </div>
                            </section>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            </div>

                        </div>
                    </div>
                </div>

        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2020</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js\scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets\demo\chart-area-demo.js"></script>
<script src="assets\demo\chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="assets\demo\datatables-demo.js"></script>
</body>
</html>

