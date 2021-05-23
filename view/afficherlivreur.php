<?php include "../Model/livreur.php";
include "../Controller/livreurC.php";

        if(isset($_GET['tri']) and $_GET['tri']=='1')
        {

        $livreur1C=new livreurC();
        $listelivreurs=$livreur1C->trieListelivreurs();
        }
        else
        { 

            $livreur1C=new livreurC();
            $listelivreurs=$livreur1C->afficherlivreurs();
        }
        

?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<title>Liste livreurs</title>
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
       
                 <form class="contact100-form validate-form" action="trielivreur.php" method="post">
              
                <span class="contact100-form-title">

                  Les livreurs disponibles
                </span>

                        
                 <table>       
            <tr>   
            <td> <input type="submit" class="contact100-form-btn" name="" value="TRIER">    </td>
             <td>  <a type="submit" class="contact100-form-btn" href = "Searchliv.php">search</a> </td>
             <td>  <a type="submit" class="contact100-form-btn" href = "statliv.php">stat</a> </td>
             <td>  <a type="submit" class="contact100-form-btn" href = "ajout livreurs.php">Ajouter</a> </td>
       <br>
    </tr>
</table>
 


        <table class="table custom-table">
          <thead class="thead-dark">
            <tr>  
             <th scope="col">id</th>
                <th scope="col">Nomlivreur</th>
                <th scope="col">matricule</th>
                <th scope="col">Zone</th>
                <th scope="col">numero</th>
                   <th scope="col">SUPPRIMER</th>
                <th scope="col">MODIFIER</th>
            </tr>
          </thead>
 <?PHP
foreach($listelivreurs as $row){
    ?>
        <tbody>
           
            <tr>
                <td><?PHP echo $row['IDlivreur']; ?></td>
                <td ><?PHP echo $row['Nomlivreur']; ?></td>
                <td><?php echo $row['Matricule'];?></td>
                <td><?PHP echo $row['Zone']; ?></td>
                <td><?PHP echo $row['Numlivreur']; ?></td>
                   <td> <form method="POST" action="supprimerlivreur.php">
	                 <input type="submit" name="supprimer" value="supprimer" class="contact100-form-btn" >
	                 <input type="hidden" value="<?PHP echo $row['IDlivreur']; ?>" name="IDlivreur">
	                </form>
	            </td>
	            <td align="center"><a href="modifierlivreur.php?IDlivreur=<?PHP echo $row['IDlivreur']; ?>" class="contact100-form-btn" >
	Modifier</a></td>
            </tr>
           
        </tbody>
        <?PHP
    }
    ?>
    </table>
    </center>
</div>
</form>
</div>
</div>
            <!-- footer -->
            <?php include_once 'footer.php'; ?>       
    </body>
</html>