<?php include "../Model/livreur.php";
include "../Controller/livreurC.php";
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
	<div class="limiter">
            
		   <div class="centrer" >
   
        <?PHP
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

		<div class="col-md-6">
    <div class="panel panel-default">
		 <div class="panel-heading">
       <h2> <center> LES LIVREURS DISPONIBLES </center> </h2>
       <form action="trielivreur.php" method="POST">
                        <input type="submit" name="" value="TRIER">
                        
                   
             <td>  <a type="submit" class="contact100-form-btn" href = "Searchliv.php">search</a> </td>
             <td>  <a type="submit" class="contact100-form-btn" href = "statliv.php">stat</a> </td>
             <td>  <a type="submit" class="contact100-form-btn" href = "ajout livreurs.php">Ajouter</a> </td>
       <br>
    </div>
<div class="table-responsive">
    <center>
    <table class="customers" >
        <thead>
            <tr>
                <th>id</th>
                <th>Nomlivreur</th>
                <th>matricule</th>
                <th>Zone</th>
                <th>numero</th>
                <th>SUPPRIMER</th>
                <th>MODIFIER</th>

            </tr>
        </thead>
        <?PHP
foreach($listelivreurs as $row){
	?>
        <tbody>
           
            <tr>
                <td align="center"><?PHP echo $row['IDlivreur']; ?></td>
                <td align="center"><?PHP echo $row['Nomlivreur']; ?></td>
                <td align="center"><?php echo $row['Matricule'];?></td>
                <td align="center"><?PHP echo $row['Zone']; ?></td>
                <td align="center"><?PHP echo $row['Numlivreur']; ?></td>
                <td align="center">
                    <form method="POST" action="supprimerlivreur.php">
	                 <input type="submit" name="supprimer" value="supprimer" class="boutton">
	                 <input type="hidden" value="<?PHP echo $row['IDlivreur']; ?>" name="IDlivreur">
	                </form>
	            </td>
	            <td align="center"><a href="modifierlivreur.php?IDlivreur=<?PHP echo $row['IDlivreur']; ?>">
	Modifier</a></td>
            </tr>
           
        </tbody>
        <?PHP
    }
    ?>
    </table>
    </center>
</div>
</div>
            <!-- footer -->
            <?php include_once 'footer.php'; ?>       
    </body>
</html>