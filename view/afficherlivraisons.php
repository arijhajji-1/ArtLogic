<?php include "../Controller/livraisonC.php";
if(isset($_GET['tri']) and $_GET['tri']=='1')
        {

        $livraison1C=new livraisonC();
        $listelivraisons=$livraison1C->trieListelivraisons();
        }
        else
        { 

            $livraison1C=new livraisonC();
            $listelivraisons=$livraison1C->afficherlivraisons();
        }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<title>Liste Livraisons</title>
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
	<div class="container-contact100">
                   <div class="wrap-contact100">
       
                 <form class="contact100-form validate-form" action="" method="post">
              
                <span class="contact100-form-title">

                  Listes des Livraisons
                </span>
<table>
       <tr><td>  <a type="submit" class="contact100-form-btn" href = "ajout livraison.php">Ajouter</a> </td>
       <td> <a type="submit" class="contact100-form-btn" href = "pdfliv.php">PDF</a> </td>
       
       </tr>
   </table>
<div class="table-responsive">
   
   <table class="table custom-table">
          <thead class="thead-dark">
            <tr>
                <th>IDlivraison</th>
                <th>IDproduit </th>
                <th>Nomcat</th>
                <th>IDclient</th>
                <th>NUMclient</th>
                <th>SUPPRIMER</th>
                <th>MODIFIER</th>

            </tr>
        </thead>
        <?PHP
foreach($listelivraisons as $row){
   

	?>
    
        <tbody>
           
            <tr>
                <td align="center"><?PHP echo $row['IDlivraison']; ?></td>
                <td align="center"><?PHP echo $row['IDproduit']; ?></td>
                <td align="center"><?php echo $row['Nomcat'];?></td>
                <td align="center"><?PHP echo $row['IDclient']; ?></td>
                <td align="center"><?PHP echo $row['NUMclient']; ?></td>
                
                <td align="center">
                    <form method="POST" action="supprimerlivraison.php">
	                 <input type="submit" name="supprimer" value="supprimer" class="boutton">
	                 <input type="hidden" value="<?PHP echo $row['IDlivraison']; ?>" name="IDlivraison">
	                </form>
	            </td>
	            <td align="center"><a href="modifierlivraison.php?IDlivraison=<?PHP echo $row['IDlivraison']; ?>">
	Modifier</a></td>
            </tr>
           
        </tbody>
        <?PHP
    }
    ?>
    </table>
</div>
</form>
</div>
            <!-- footer -->
            <?php include_once 'footer.php'; ?>       
    </body>
</html>
