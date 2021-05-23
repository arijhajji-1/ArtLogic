<?php include "../Model/livraison.php";
include "../Controller/livraisonC.php";
?>
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<title>Liste Evenement</title>
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
<?PHP

if (isset($_GET['IDlivraison'])){
	$livraisonC=new livraisonC();
    $result=$livraisonC->recupererlivraison($_GET['IDlivraison']);
	foreach($result as $row){
		$IDlivraison=$row['IDlivraison'];
		$IDproduit=$row['IDproduit'];
    $Nomcat=$row['Nomcat'];
		$IDclient=$row['IDclient'];
    $NUMclient=$row['NUMclient'];}}
?>

 
    <span class="contact100-form-title">
       Modifier une livraison 
    </span>
  
        <form action="mod-livraison.php" class="contact100-form validate-form" method="POST">
                  <center>
                    <table>

                        <tr>
                            <td>
                               <label >Saisir le IDlivraison</label>
                           </td>
                           <td>
                               <input type="number" class="form-control" id="success" name="IDlivraison" value="<?PHP echo $IDlivraison ?>"/>
                            </td>
                        </tr>

                        <tr>
                            <td>
                               <label>Saisir le IDproduit</label>
                           </td>
                           <td>
                               <input type="text" class="form-control" id="warning" name="IDproduit" value="<?PHP echo $IDproduit ?>"/>
                            </td>
                        </tr>

                        <tr>
                            <td>
                               <label>Saisir le Nomcat</label>
                           </td>
                           <td>
                               <input type="text" class="form-control" id="error" name="Nomcat" value="<?PHP echo $Nomcat ?>"/>
				            </td>
                        </tr>    
                        <tr>
                            <td>
                               <label >Choisir un IDclient</label>
                           </td>
                           <td>
                               <input type="text" class="form-control" id="warning" name="IDclient" value="<?PHP echo $IDclient ?>"/>
                            </td>
                        </tr>

                         <tr>
                            <td>
                               <label>Saisir le NUMclient</label>
                           </td>
                           <td>
                               <input type="text" class="form-control" id="NUMclient" name="NUMclient" value="<?PHP echo $NUMclient ?>"/>
                           </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="modifier" value="modifier" class="contact100-form-btn">
                                <input type="hidden" name="IDlivraison_ini" value="<?PHP echo $_GET['IDlivraison'];?>">
                            </td>
                        </tr>
                    </table>
                    </center>
                </form>
</div>
</div>
 <!-- footer -->
 <?php include_once 'footer.php'; ?>       
    </body>
</html>
