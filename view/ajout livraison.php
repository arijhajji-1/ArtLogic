<?php
//include "produitC.php";
include_once '../Model/produit.php'; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<title>Ajout livraisons</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <!-- My Css Class-->

	<link rel="stylesheet" type="text/css" href="../css/main.css">
    <link href="../css/assyl.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" /> 
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
	   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>  
    </head>

    <body class="sb-nav-fixed">
    <!-- header -->
    <?php include_once 'header.php'; ?>
     <!-- Contient -->
    <body>
	<div class="limiter">
            
    <div class="content-wrapper">
                            <script type="text/javascript" src="../js/controlsaisi.js"></script>
        
            <form method="POST" action="ajoutlivraison.php" name="f" onsubmit="return test();">
                   <h2> <center> Ajouter une livraison </center> </h2>
                    <center>
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
                                          <label class="control-label">saisir le Nom de categorie</label>
                                    </td>
                                    <td>
                                          <input type="text" class="form-control" id="Nomcat" name="Nomcat"/>
                                    </td>
                                </tr>
        
                                <tr>
                                    <td>
                                         <label>selectionner lIDclient </label>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" id="IDclient" name="IDclient"/>
                                   </td>
                                </tr>
        
                                 <tr>
                                    <td>
                                          <label>saisir le numero </label>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" id="NUMclient" name="NUMclient"/>
                                    </td>
                                </tr>
        
                                <tr>
                                    <td></td>
                                    <td>
                                        </br>
                                         <input type="submit" name="ajouter" value="Ajouter" class="form-control" style=" width: 100%;
          background-color: rgb(20, 40, 95);
          color: white;
         ">
                                          <input type="submit" name="Afficher les livraisons" value="Afficher les livraisons " class="form-control" style=" width: 100%;
                                          background-color: rgb(46, 21, 88);
                                          color: white;
                                         ">
                                             
                                    </td>
                                </tr>                       
                        </table>
                        </center>
                      </form>
            </div>
		   
            <!-- footer -->
            <?php include_once 'footer.php'; ?>       
    </body>
</html>
