<?php
	include '../controller/evenementC.php';
  include_once '../Model/Evenenement.php';


	$evenementC = new evenementC();
	$error = "";
	
	if (
		isset($_POST["TitreEvenement"]) && 
        isset($_POST["LieuEvenement"]) &&
        isset($_POST["DateEvenement"]) &&
        isset($_POST["DureeEvenement"]) &&
        isset($_POST["DescriptionEvenement"]) &&
        isset($_POST["ImageEvenement"])
       
	){
		if (
            !empty($_POST["TitreEvenement"]) && 
            !empty($_POST["LieuEvenement"]) && 
            !empty($_POST["DateEvenement"]) &&
            !empty($_POST["DureeEvenement"]) &&
            !empty($_POST["DescriptionEvenement"]) &&
            !empty($_POST["ImageEvenement"]) 
            
        ) {
            $Evenenement = new Evenenement(
                $_POST['TitreEvenement'],
                $_POST['LieuEvenement'], 
                $_POST['DateEvenement'],
                $_POST['DureeEvenement'],
                $_POST['DescriptionEvenement'],
                $_POST['ImageEvenement'],
               
			);
			
            $evenementC->modifierEvenement($Evenenement, $_GET['IdEvenement']);
            header('Location:evenementView.php');
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
        <title>Artlogic Admins </title>
        <!-- My Css Class-->
           <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link href="../css/assyl.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" /> 
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>  
                
        <!-- java -->
        <script type="text/javascript" src="../js/events.js"></script>
    </head>
    <body class="sb-nav-fixed">
            <!-- header-->
                  <?php include_once 'header.php'; ?>
            <!-- Contient -->
            <div id="layoutSidenav_content">
                <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> 
                  </style>
              
                    <div id="layoutSidenav_content">
                <div id="layoutSidenav_content">
                        <div class="container-contact100">
        <div class="wrap-contact100">
           <span class="contact100-form-title">

                 Events Form
                </span>                     <?php 
			if (isset($_GET['IdEvenement'])){
				$Evenenement = $evenementC->recupererEvenement($_GET['IdEvenement']);
				
		?>
                        <form action="" method="POST">
                          <br>
                      
                          <h4>Titre Evenement</h4>
                          <div class="Evenement">
                            <input type="text" name="TitreEvenement" id="TitreEvenement" placeholder="exemple: Exposé Maison de jeune" value = "<?php echo $Evenenement['TitreEvenement']; ?>"required/>
                          </div>
                          <h4>Lieu Evenement</h4>
                          <input type="text" name="LieuEvenement" id="LieuEvenement" value = "<?php echo $Evenenement['LieuEvenement']; ?>"required/>
                          <h4>Date Evenement<span>*</span></h4>
                          
                              
                          <div class="date">
                            <input type="date" name="DateEvenement" id="DateEvenement" required/>
                            <i class="fas fa-calendar-alt"></i>
                          </div>
                           
                          <h4>Durée Evenement<span>*</span></h4>
                          <select name="DureeEvenement" id="DureeEvenement"  class="form-control">
                            <option class="disabled"  value="int" disabled selected >*Please Select*</option>
                            <option value="1">1 journée</option>
                            <option value="2">2 jours</option>
                            <option value="3">3 jours</option>
                            <option value="4">4 jours</option>
                            <option value="5">5 jours</option>
                            <option value="6">6 jours</option>
                            <option value="7">7 jours</option>
                            <option value="8">8 jours</option>
                            <option value="9">9 jours</option>
                            <option value="10">10 jours</option>
                          </select>
                           <i class="fas fa-clock"></i>
                        
                           

                          <h4>Description Evenement</h4>
                          <textarea rows="5" id="DescriptionEvenement" name="DescriptionEvenement" required></textarea>
                          <h4>Select image to upload:</h4>
                          <input type="file" name="ImageEvenement" id="ImageEvenement" min="<?php echo date('Y-m-d'); ?>">
                          <div class="container-contact100-form-btn">
                            <button type="submit" name="modifier"  class="contact100-form-btn" value="modifier" onclick="return okEvent();" >Update</button>
                          </div>
                          
                        </form>
                        <?php
		}
		?>
                      </div>
            <!-- footer -->
            <?php include_once 'footer.php'; ?>   
    </body>
</html>
