
<!DOCTYPE html>
<html lang="en">
    <head>
	<title>ajout des livreurs</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <!-- My Css Class-->

	<link rel="stylesheet" type="text/css" href="../css/main.css">
    <link href="../css/assyl.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" /> 
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
	    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->

<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>  
    </head>

    <body class="sb-nav-fixed">
    <!-- header -->
    <?php include_once 'header.php'; ?>
     <!-- Contient -->
    <body>
	<div class="limiter">
            
         <div class="container-contact100">
        <div class="wrap-contact100">
            <script type="text/javascript" src="../js/controlsaisi.js"></script>
            
                <form method="POST" action="ajoutlivreur.php" name="f" onsubmit="return test();">

   <span class="contact100-form-title">

                    Ajouter un livreur
                </span>
    <center>
            <table class="table">
               
                <tr>
                    <td>
                         <label class="control-label">saisir le Nomlivreur</label>
                    </td>
                    <td>
                         <input type="text" class="form-control" id="Nomlivreur" name="Nomlivreur" required/>
                    </td>
                </tr>

                <tr>
                    <td>
                          <label class="control-label">saisir la matricule</label>
                    </td>
                    <td>
                          <input type="text" class="form-control" id="Matricule" name="Matricule" required/>
                    </td>
                </tr>

                <tr>
                    <td>
                         <label>selectionner la Zone</label>
                    </td>
                    <td>
                         <select class="form-control" name="Zone" id="Zone" type="text">
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
                          <label>saisir le numero </label>
                    </td>
                    <td>
                          <input type="text"  class="form-control" id="Numlivreur" name="Numlivreur" required/>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        </br>
                         <input type="submit" name="ajouter" value="Ajouter" class="contact100-form-btn">
                 
                             
                    </td>
                </tr>                       
        </table>
        </center>
    </div>
      </form>
</div>
            <!-- footer -->
            <?php include_once 'footer.php'; ?>       
    </body>
</html>
