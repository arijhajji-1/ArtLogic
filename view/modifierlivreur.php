<?php include "../Model/livreur.php";
include "../Controller/livreurC.php";
?>
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<title>Modif livreur</title>
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

if (isset($_GET['IDlivreur'])){
	$livreurC=new livreurC();
    $result=$livreurC->recupererlivreur($_GET['IDlivreur']);
	foreach($result as $row){
		
		$Nomlivreur=$row['Nomlivreur'];
    $Matricule=$row['Matricule'];
		$Zone=$row['Zone'];
    $Numlivreur=$row['Numlivreur'];}}
?>
<div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
      <h2> <center> MODIFIER UN LIVREUR </center> </h2>
       <br>
    </div>
    <div class="panel-body">
        <form action="mod-liv.php" method="POST">
                  <center>
                    <table>

                    

                        <tr>
                            <td>
                               <label>Saisir le Nomlivreur</label>
                           </td>
                           <td>
                               <input type="text" class="form-control" id="Nomlivreur" name="Nomlivreur" value="<?PHP echo $Nomlivreur ?>"/>
                            </td>
                        </tr>

                        <tr>
                            <td>
                               <label>Saisir la matricule</label>
                           </td>
                           <td>
                               <input type="text" class="form-control" id="Matricule" name="Matricule" value="<?PHP echo $Matricule ?>"/>
				            </td>
                        </tr>    
                        <tr>
                            <td>
                               <label >Choisir un Zone</label>
                           </td>
                           <td>
                               <select id="Zone" name="Zone" type="text" >
                                  <option><?PHP echo $Zone ?></option>
                                      <option>Ariana</option>
                                      <option>Béja</option>
                                      <option>Ben Arous</option>
                                      <option>Bizerte</option>
                                      <option>Gabes</option>
                                      <option>Gafsa</option>
                                      <option>Jendouba</option>
                                      <option>Kairouan</option>
                                      <option>Kasserine</option>
                                      <option>Kebili</option>
                                      <option>La Manouba</option>
                                      <option>Le Kef</option>
                                      <option>Mahdia</option>
                                      <option>Médenine</option>
                                      <option>Monastir</option>
                                      <option>Nabeul</option>
                                      <option>Sfax</option>
                                      <option>Sidi Bouzid</option>
                                      <option>Siliana</option>
                                      <option>Sousse</option>
                                      <option>Tataouine</option>
                                      <option>Tozeur</option>
                                      <option>Tunis</option>
                                      <option>Zaghouan</option>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            <td>
                               <label>Saisir le num</label>
                           </td>
                           <td>
                               <input type="text" class="form-control" id="Numlivreur" name="Numlivreur" value="<?PHP echo $Numlivreur ?>"/>
                           </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="modifier" value="modifier" class="boutton">
                                <input type="hidden" name="IDlivreuris" value="<?PHP echo $_GET['IDlivreur'];?>">
                            </td>
                        </tr>
                    </table>
                    </center>
                </form>


 <!-- footer -->
 <?php include_once 'footer.php'; ?>       
</body>
</html>