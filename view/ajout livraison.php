<?php
//include "produitC.php";
include_once '../Model/produit.php'; 
include_once '../Model/categorie.php'; 
include_once '../Model/User.php'; 

?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<title>Ajout livraisons</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <!-- My Css Class-->

	<link rel="stylesheet" type="text/css" href="../css/main.css">
    
    <link href="../css/styles.css" rel="stylesheet" /> 
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
	    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>  
    </head>

    <body class="sb-nav-fixed">
    <!-- header -->
    <?php include_once 'header.php'; ?>
     <!-- Contient -->
   
	<div class="container-contact100">
        <div class="wrap-contact100">
 <script type="text/javascript" src="../js/controlsaisi.js"></script>
            <form class="contact100-form validate-form" method="post" action="ajoutlivraison.php" name="f" onsubmit="return test();">
                <span class="contact100-form-title">

                    Ajouter une livraison
                </span>

                           
        
          
                
                            <table class="table">
                                
                                
                                <tr>
                                    
                                    <td>
                                        <div class="container" >
                                            <span class="label-input100">Nom produit</span>
                                            <?php
                        require_once('../configc.php');
                        $mysqli = new mysqli('localhost', 'root', '' ,'web');
                        if($mysqli->connect_error){
                            die('Connect-Error (' . $mysqli->connect_error . ') '
                                . $mysqli->connect_error);
                        }
                        $query = $mysqli->query( "SELECT * FROM produit");
                        while ($array[] = $query->fetch_object()); 
                            # code...
                         array_pop ( $array );
                        ?>
                         
                                             <div class="form-group">
                        <select  name="IDproduit" class="form-control">
                             <?php foreach ( $array as $option ) :?>
                                  <option value="<?php echo $option->Id_produit; ?>"><?php echo $option->NomP; ?> </option>
                             <?php endforeach; ?>
                        </select>
                            </div>
                                    </td>
                                </tr>
        
                                <tr>
                                    <td>
                                    <div class="container" >
                                            <span class="label-input100">NomCategorie</span>
                                            <?php
                        require_once('../configc.php');
                        $mysqli = new mysqli('localhost', 'root', '' ,'web');
                        if($mysqli->connect_error){
                            die('Connect-Error (' . $mysqli->connect_error . ') '
                                . $mysqli->connect_error);
                        }
                        $query = $mysqli->query( "SELECT * FROM categorie");
                        while ($arrayd[] = $query->fetch_object()); 
                            # code...
                         array_pop ( $arrayd );
                        ?>
                         
                                             <div class="form-group">
                        <select  name="Nomcat" class="form-control">
                             <?php foreach ( $arrayd as $option ) :?>
                                  <option value="<?php echo $option->NomC ; ?>"><?php echo $option->NomC; ?> </option>
                             <?php endforeach; ?>
                        </select>
                            </div>
                                    </td>
                                   
                                </tr>
        
                                <tr>
                                <div class="container" >
                                            <span class="label-input100">Id client</span>
                                            <?php
                        require_once('../configc.php');
                        $mysqlii = new mysqli('localhost', 'root', '' ,'web');
                        if($mysqlii->connect_error){
                            die('Connect-Error (' . $mysqlii->connect_error . ') '
                                . $mysqlii->connect_error);
                        }
                        $queryy = $mysqlii->query( "SELECT * FROM users");
                        while ($arrays[] = $queryy->fetch_object()); 
                            # code...
                         array_pop ( $arrays );
                        ?>
                         
                                             <div class="form-group">
                        <select  name="IDclient" class="form-control">
                             <?php foreach ( $arrays as $options ) :?>
                                  <option value="<?php echo $options->id_user; ?>"><?php echo $options->nom_user; ?> </option>
                             <?php endforeach; ?>
                        </select>
                                </tr>
        
                                 <tr>
                                    <td>
                                          <label>saisir le numero  du Client </label>
                                    </td>
                                    <td>

                                        <input type="text" class="input100"  id="NUMclient" name="NUMclient" required>
                                    </td>
                                </tr>
        
                                <tr>
                              
                                    <td>
                                        </br>
                                        
             
                      
                                         <button type="submit" name="ajouter" value="submit"  class="contact100-form-btn" > Ajouter </button>
                                           
                                     
                                        
                                         
                                    </td>
                                </tr>                       
                        </table>
                       </div>
                      </form>
            </div>
		   
            <!-- footer -->
            <?php include_once 'footer.php'; ?>       
    </body>
</html>
