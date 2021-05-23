<?php

include_once '../Controller/produitC.php';
include_once '../Model/produit.php'; 





session_start();
if(!empty($_SESSION)) {
    $id = $_SESSION['id_user'];
}
if(!empty($_POST['NomP']) && !empty($_POST['DateA']) && !empty($_POST['Description1']) && !empty($_POST['Genre']) && !empty($_POST['Couleur']) && !empty($_POST['Taille']) && !empty($_POST['poids']) && !empty($_POST['Prix']) && !empty($_POST['Quantite']) && !empty($_POST['image'])){

$NomP = $_POST['NomP'];    
$DateA = $_POST['DateA'];
$Description1 = $_POST['Description1'];
$Genre = $_POST['Genre'];
$Couleur = $_POST['Couleur'];
$Taille = $_POST['Taille'];
$poids = $_POST['poids'];
$Prix = $_POST['Prix'];
$Quantite= $_POST['Quantite'];
$image= $_POST['image'];






$produitC = new produitC();
$produit=new produit ($NomP, $DateA, $Description1, $Genre, $Couleur,$Taille,$poids,$Prix,$Quantite,$image,$id);
try{
    $produitC->ajouterproduit($produit);
}catch(Exception $e){
    echo "ERREUR connection.php : ".$e->getMessage();
    exit;
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
        <title>ajouter produit</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
            <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--============================================================================================================================================================================================-->   <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
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
                            

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts4" aria-expanded="false" aria-controls="collapseLayouts4">
                              <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                              Produits
                              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                          </a>
                          <div class="collapse" id="collapseLayouts4" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                              <nav class="sb-sidenav-menu-nested nav">
                              <a class="nav-link" href="afficherproduit2.php">Produits</a>
                              
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
                                   
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Panier
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Statistique
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                DataViewer
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Code Brewers
                    </div>
                </nav>
            </div>
 <div class="container-fluid">
                        <h1 class="mt-4">produit</h1>
                       
                     
                      
                    
                        <div class="container-contact100">
        <div class="wrap-contact100">

            <form class="contact100-form validate-form" method="post" action="">
                <span class="contact100-form-title">

                    Ajouter un produit
                </span>

                <!--contenu sous forme de boite-->  


     
      <div class="wrap-input100 bg1 rs1-wrap-input100">
        <label for="NomP">NomP :</label>
        <input id="NomP" type="text" name="NomP"/>
      </div>

      <div class="wrap-input100 bg1 rs1-wrap-input100">
        <label for="bdate">Date d'ajout produit :<span></span></label>
        <input id="bdate" type="date" name="DateA" required/>
        <i class="fas fa-calendar-alt"></i>
      </div>
    
          <div class="wrap-input100 bg1 rs1-wrap-input100">
            <label for="Description">Description :<span></span></label>
            <input id="Description" type="text" name="Description1" required/>
          </div>
          <div class="wrap-input100 bg1 rs1-wrap-input100">
            <label for="prix">Prix :</label>
            <input id="prix" type="number" name="Prix" />
          </div>
        
     
      
       
       
        <!--    <label for="Genre">genre :</label>
<select name="Genre" id="Genre">
  <option value="tapis">tapis</option>
  <option value="vetement">vetement</option>
</select> --> 
<div class="container">
   <label>Genre</label>
<?php
require_once('../connection.php');
$mysqli = new mysqli('localhost', 'root', '' ,'web');
if($mysqli->connect_error){
    die('Connect-Error (' . $mysqli->connect_error . ') '
        . $mysqli->connect_error);
}
$query = $mysqli->query( "SELECT * FROM categorie");
while ($array[] = $query->fetch_object()); 
    # code...
 array_pop ( $array );
?>                            
<div class="form-group">
                  

                   
<select name="Genre">
     <?php foreach ( $array as $option ) :?>
          <option value="<?php echo $option->NomC; ?>"><?php echo $option->NomC; ?> </option>
     <?php endforeach; ?>       
</select>
  
                </div>
              </div>

           <!-- <input id="Genre" type="text" name="Genre" />-->
          
          <div class="wrap-input100 bg1 rs1-wrap-input100">
            <label for="couleur">couleur :</label>
            <input  class="input100" id="couleur" type="text" name="Couleur" />
          </div>
    
   
 
        
          <div class="wrap-input100 bg1 rs1-wrap-input100">
            <label for="taille">Taille :</label>
            <input class="input100" id="taille" type="text" name="Taille" />
          </div>
          <div class="wrap-input100 bg1 rs1-wrap-input100">
            <label for="poids">poids :</label>
            <input class="input100" id="poids" type="text" name="poids" />
          </div>
   
     
	  <div class="wrap-input100 bg1 rs1-wrap-input100">
        <label for="Quantite">Quantite :</label>
        <input class="input100" id="Quantite" type="number" name="Quantite"/>
      </div>

      <div class="wrap-input100 bg1 rs1-wrap-input100">
        <label for="image">Upload Picture :</label>
        <input class="input100" id="image" name="image" type="file"/>
      </div>
     
      <div class="container-contact100-form-btn">
        <button class="contact100-form-btn" type="submit"   href="/">Ajouter</button>
      </div>
    </div>
    </form>
     </div>
  </div> 
</div>


       
      </div>


    </div>

  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

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
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/datatables-demo.js"></script>
    </body>
</html>
