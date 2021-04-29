
<?php
    require_once '../controller/actualiteC.php';
    require_once '../model/Actualite.php';

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
           header('Location:../views/actualiteView.php');
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
        <title>Dashboard - SB Admin</title>
        
        <!-- My Css Classes-->
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css/assyl.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> 
                
        <!-- java -->
        <script type="text/javascript" src="../js/actualite.js"></script>
    </head>
    <body class="sb-nav-fixed">
            <!-- header-->
                  <?php include_once 'header.php'; ?>
            <!-- Contient -->
            <div id="layoutSidenav_content">
                <div id="layoutSidenav_content">
                    <div class="testbox">
                        <form action="" method="POST">
                          <br>
                          <h1>News Form</h1>
                          <p></p>
                          <h4>Titre Actualite</h4>
                          <div >
                            <input type="text" name="TitreActualite" id="TitreActualite" placeholder="exemple: Exposer inatendue" required/>
                          </div>
                          <h4>Date Actualite<span>*</span></h4>
                          <div class="date">
                            <input type="date" name="DateActualite" id="DateActualite" min="<?php echo date('Y-m-d'); ?>"required/>
                            <i class="fas fa-calendar-alt"></i>
                          </div>
                          <h4>Description Actualite</h4>
                          <textarea rows="5" id="DescriptionActualite" name="DescriptionActualite" required></textarea>
                          <h4>Select image to upload:</h4>
                          <input type="file" name="ImageActualite" id="ImageActualite">
                          <div class="btn-block">
                            <button type="submit" name="submit" value="submit"  onclick="return okEvent();" >Add</button>
                          </div>
                          
                        </form>
                      </div>
            <!-- footer -->
            <?php include_once 'footer.php'; ?>   
    </body>
</html>
