<?php
include_once '../Controller/produitC.php';
include_once '../Model/produit.php'; 
include "../Controller/CommandeC.php";

session_start();
$listeCommande= (new CommandeC())->afficherCommande($_SESSION['id_user']);
if(isset($_GET['search'])){
    $listeCommande= (new CommandeC())->rechercherCommande($_GET['search']);

}



 

?>





<head>
  
    <style> 
    .amount-old {
    text-decoration: line-through;
}
    </style>
        <meta charset="utf-8" >
        <title>ArtLogic</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
       <meta property="og:url"           content="http://afficherproduitfront.php" />
        <meta property="og:type"          content="website" />
       <meta property="og:title"         content="ArtLogic" />
       <meta property="og:description"   content="welcome to our website" />
       <meta property="og:image"         content="i/logo.png" />

                <link rel="icon" href="../i/logo.png" type="i/logo.png">
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>


<nav class="navigation_1 bg-light pt-30 pb-30 text-center">
    <div class="container px-xl-0">
        <div class="row justify-content-center align-items-center f-16">
            <div class="mt-20 d-flex align-items-center author_info">
                    <img  src="..\i\logo.png" class="w-300 h-300 radius_full" alt="" />
            <div class="col-lg-6" >
                <a href="index.html" class="link color-main mx-15">Home</a>
                <a href="#" class="link color-main mx-15">Profile</a>
                <a href="#" class="link color-main mx-15">Blog</a>
                <a href="about.html" class="link color-main mx-15">About</a>
                <a href="afficherproduitfront.php" class="link color-main mx-15">Shop</a>
                                <a href="reclamations.php" class="link color-main mx-15">Reclamation</a>

                <a href="#" class="link color-main mx-15"><i class="fas fa-search"></i></a>
                <a href="cart_items.php" class="link color-main mx-15">Panier</a>
                <a href="#" class="link color-main mx-15"><i class="fas fa-search"></i></a>
            </div>
            <div class="mt-20 mt-lg-0 col-lg-3 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center" >
                <a href="login.php" class="mr-20 link color-main">Sign In</a>
                <a href="AjouterUser.php" class="btn sm action-2 f-16">Sign Up</a>
            </div>
        </div>
    </div>
</nav> 




                <span class="contact100-form-title">

               Liste des Produits
                </span> 
                <form method="get">
    <label>
        <input type="text" placeholder="Taper ici .... " name="search" class="form-control" />
    </label>
    <button class="btn btn-info">Rechercher</button>
   
</form>
<td><form method="POST" action="pdftotalcomm.php">
	  <button class="btn btn-info">Enregistrer   facture</button>
	</form>
	</td>
<table class="table" >
    <thead class="thead-dark">
    <tr>
        <th>Id commande</th>
        <th>Id client</th>
        <th>Prix totale</th>
        <th>Mode de payement</th>
        <th>Produits</th>
        <th>Description</th>
        <th>supprimer</th>
        <th>facture</th>
    </tr>
    </thead>
    <tbody>
    
    <?PHP
    foreach($listeCommande as $row){
        ?>
        <tr>
            <td><?PHP echo $row['id_commande']; ?></td>
            <td><?PHP echo $row['id_utilisateur']; ?></td>
            <td><?PHP echo $row['prix_total']; ?></td>
            <td><?PHP echo $row['mode_de_payement']; ?></td>
            <td><?PHP echo $row['produits']; ?></td>
            <td><?PHP echo $row['description_commande']; ?></td>
            <td><form method="POST" action="supprimerCommandeses.php">
                    <input type="submit" name="supprimer" value="supprimer" class="btn btn-danger">
                    <input type="hidden" value="<?PHP echo $row['id_commande']; ?>" name="id_commande">
                </form>
            
            </td>
           
        </tr>
<?php
        }
        ?>

          
          
        </table>
      </div>


    </div>

  </div>
    
    

    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>

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



   <!--pied de page-->
   <footer class="footer_1 bg-light pt-75 pb-65 text-center">
    <div class="container px-xl-0">
        <div class="row justify-content-between align-items-center lh-40 links">
            <div class="col-lg-4 col-sm-6 text-sm-right text-lg-left order-1 order-lg-0" >
                <a href="about.html" class="mr-15 link color-main">About</a>
                <a href="#" class="mx-15 link color-main">Policy</a>
                <a href="#" class="mx-15 link color-main">Terms</a>
            </div>
            <div class="mt-20 d-flex align-items-center author_info">
                    <img  src="..\i\logo.png" class="w-300 h-300 radius_full" alt="" />
            </div>
            <div class="col-lg-4 col-sm-6 text-sm-left text-lg-right order-2 order-lg-0" >
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

