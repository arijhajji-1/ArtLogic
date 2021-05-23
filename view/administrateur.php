<?php
include "../Controller/UserC.php";
require_once '../Model/User.php';
session_start();
//$email= $_SESSION['email'];
//$pass= $_SESSION['mot_de_passe'];

$UserC = new UserC();
$Admin = $UserC->afficherAdmin();
if(isset ($_POST['supprimer']))
{
    $Admin = $UserC->supprimerUser($_POST['ID']);
    header('Location:administrateur.php');
    $Admin = $UserC->afficherAdmin();
}
if(isset($_POST['trie1']))
{$trie=$_POST['trie'];


    $Admin=$UserC->trierAdmin($trie);
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
    <title>ArtLogic Admin</title>
     <link href="../css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
            <link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->   <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->

<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a href="index.html" class="link color-main mx-15"><img  src="..\i\logo.png" height="150" width="150" class="w-300 h-300 radius_full" alt="" /></a>
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
                <a class="dropdown-item" href="index.php">Home</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">Logout</a>
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
                        <a class="nav-link" href="afficherlivraisons.php">Livraison</a>
                                    <a class="nav-link" href="afficherlivreur.php">Livreur</a>
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
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">

                                <div class="sb-sidenav-collapse-arrow">options<i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="401.html">401 Page</a>
                                    <a class="nav-link" href="404.html">404 Page</a>
                                    <a class="nav-link" href="500.html">500 Page</a>
                                </nav>
                            </div>
                        </nav>
                    </div>

                  
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
                    <p> <form method="POST" action="">
                        <select name="trie" id="trie"  class="form-control" >
                            <option value="Nom">Nom</option>
                            <option value="Prenom">Prenom</option>
                            <option value="Pseudo">Pseudo</option>
                            <option value="Date de naissance">Date de naissance</option>
                            <option value="Date de creation">Date de creation</option>

                        </select>
                        <input type="submit" name="trie1" value="trier" class="btn btn-success" >
                    </form> </p>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h2>Liste des administrateurs</h2>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <tr>
                                                <th>Photo</th>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Email</th>
                                                <th>Pseudo</th>
                                                <th>Mot de passe </th>
                                                <th> Date de naissance </th>
                                                <th> Adresse </th>
                                                <th> Date de création </th>
                                                <th>Numéro de téléphone</th>
                                            </tr>


                                            <?php
                                            foreach ($Admin as $liste)
                                            {

                                            ?>
                                            <tr>
                                                <td><img src="../i/<?php echo $liste['image'] ?>" width="80"
                                                         height="80"/></td>
                                                <td> <?php echo $liste['nom_user'] ?> </td>
                                                <td> <?php echo $liste['prenom_user'] ?> </td>
                                                <td> <?php echo $liste['Email_user'] ?> </td>
                                                <td> <?php echo $liste['pseudo_user'] ?> </td>
                                                <td> <?php echo $liste['mot_de_passe'] ?> </td>
                                                <td> <?php echo $liste['date_de_naissance_user'] ?> </td>
                                                <td> <?php echo $liste['adresse_user'] ?> </td>
                                                <td> <?php echo $liste['cree_a_user'] ?> </td>
                                                <td> <?php echo $liste['numero_telephone_user'] ?> </td>
                                                <td>
                                                    <form method="POST" action="">
                                                        <input type="submit" name="supprimer" value="Bloquer"
                                                               class="btn btn-success" ">
                                                        <input type="hidden" value="<?PHP echo $liste['id_user']; ?>"
                                                               name="ID">
                                                    </form>
                                                </td>
                                                <?php
                                                if ($liste['Email_user'] == $_SESSION['email'])
                                                {
                                                    ?>
                                                    <td>
                                                        <form method="POST" action="">
                                                            <a type="button" class="btn btn-success"
                                                               href="ModifierAdmin.php">Modifier </a>
                                                        </form>
                                                    </td>
                                                    <?php
                                                }
                                                        ?>
                                                </tr>
                                            <?php } ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <a type="button" class="contact100-form-btn" href = "AjouterAdmin.php">Ajouter Administrateur</a>                </div>
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
<script src="..\front\js\scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="..\assets\demo\chart-area-demo.js"></script>
<script src="..\assets\demo\chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="..\assets\demo\datatables-demo.js"></script>
</body>
</html>
