
<?php
    require_once '../Controller/actualiteC.php';
    require_once '../Model/Actualite.php';

    $error = "";
    // create user
    $Actualite = null;
    // create an instance of the controller
    $actualiteC = new actualiteC();
    if (
        isset($_POST["TitreActualite"]) &&
        isset($_POST["DateActualite"]) &&
        isset($_POST["DescriptionActualite"]) &&
        isset($_POST["ImageActualite"]) 
        
    ) {
        if (
            !empty($_POST["TitreActualite"]) && 
            !empty($_POST["DateActualite"]) &&
            !empty($_POST["DescriptionActualite"]) &&
            !empty($_POST["ImageActualite"])
            
        ) {
            $Actualite = new Actualite(
                $_POST['TitreActualite'], 
                $_POST['DateActualite'],
                $_POST['DescriptionActualite'],
                $_POST['ImageActualite'],       
            );
            $actualiteC->ajouterActualite($Actualite);
            mail('assyl.kriaa@esprit.com','Un Ajout au table Actualite','Une nouvelle entite Actualite est ajouter il y a quelques secondes ','From: assyl.kriaa@esprit.tn');
           header('Location:actualiteView.php');
        }
        else
            $error = "Missing information";
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
         <title>ArtLogic Admin</title>
        
        <!-- My Css Classes-->
        <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link href="../css/assyl.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" /> 
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>  
                
        <!-- java -->
        <script type="text/javascript" src="../js/actualite.js"></script>
    </head>
    <body class="sb-nav-fixed">
            <!-- header-->
                  <?php include_once 'header.php'; ?>
            <!-- Contient -->
            <div id="layoutSidenav_content">
                <div id="layoutSidenav_content">
               <div class="container-contact100">
        <div class="wrap-contact100">
           <span class="contact100-form-title">

                  News Form
                </span> 
                        <form action="" method="POST">
                          <br>
                        
                          <h4>Titre Actualite</h4>
                          <div class="wrap-input100 bg1 rs1-wrap-input100" >
                            <input  class="input100"type="text" name="TitreActualite" id="TitreActualite" placeholder="exemple: Exposer inatendue" required/>
                          </div>
                           <div class="wrap-input100 bg1 rs1-wrap-input100" >
                          <h4>Date Actualite<span>*</span></h4>
                          <div class="date">
                            <input type="date" name="DateActualite" id="DateActualite" min="<?php echo date('Y-m-d'); ?>"required/>
                            <i class="fas fa-calendar-alt"></i>
                          </div>
                        </div>
                           <div class="wrap-input100 bg1 rs1-wrap-input100" >
                          <label>Description Actualite</label>
                          <textarea rows="5" id="DescriptionActualite" name="DescriptionActualite" required></textarea>
                        </div>
                           <div class="wrap-input100 bg1 rs1-wrap-input100" >
                          <label>Select image to upload:</label>
                          <input type="file" name="ImageActualite" id="ImageActualite">
                        </div>
                          <div class="container-contact100-form-btn">
                            <button  class="contact100-form-btn" type="submit" name="submit" value="submit"  onclick="return okEvent();" >Add</button>
                            
                          </div>
                          
                        </form>
                      </div>
                    </div>
            <!-- footer -->
            <?php include_once 'footer.php'; ?>   
    </body>
</html>
