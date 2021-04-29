<?PHP
	include "../controller/evenementC.php";

	$evenementC=new evenementC();
	$listeevenement=$evenementC->afficherEvenement();

	if(isset($_POST['submit']))
{
    $listeevenement=$evenementC->trierEvenement();
}

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
	<div class="limiter">
            
		   <div class="centrer" >
			<div>
				<div >
		<hr>
        <br>
		<form class="contact100-form validate-form" action="" method="POST">
                <span class="contact100-form-title">

               Liste des Evenement
                </span> 

             <p> <form method="POST" action="">
                <input type="submit" name="submit" value="trier" > 
               </form> </p>   
		<table   >
        
			<tr >
				<th ><strong>Id Evenement</strong></th>
				<th ><strong>Titre Evenement</strong></th>
				<th ><strong>Lieu Evenement</strong></th>
				<th ><strong>Date Evenement</strong></th>
				<th ><strong>Duree Evenement</strong></th>
				<th ><strong>Description Evenement</strong></th>
				<th ><strong>Image Evenement</strong></th>
				<th ><strong>supprimer</strong></th>
				<th ><strong>modifier</strong></th>
			</tr>

			<?PHP
				foreach($listeevenement as $Evenenement){
					$image = $Evenenement['ImageEvenement']; // source iamge
                     
			?>
				<tr>
					<td ><?PHP echo $Evenenement['IdEvenement']; ?></td>
					<td ><?PHP echo $Evenenement['TitreEvenement']; ?></td>
					<td ><?PHP echo $Evenenement['LieuEvenement']; ?></td>
					<td ><?PHP echo $Evenenement['DateEvenement']; ?></td>
					<td ><?PHP echo $Evenenement['DureeEvenement']; ?></td>
					<td ><?PHP echo $Evenenement['DescriptionEvenement']; ?></td>
					<td ><img src="../assets/img/<?PHP echo $image ?>" alt="Texte Alternatif" width="100" height="100"> </td> <!-- affichage -->
					
					<td >
						<form method="POST" action="../views/evenementDelete.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $Evenenement['IdEvenement']; ?> name="IdEvenement">
						</form>
					</td>
					<td >
						<a href="../views/evenementUpdate.php?IdEvenement=<?PHP echo $Evenenement['IdEvenement']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
            
		</table>         
            <!-- footer -->
            <?php include_once 'footer.php'; ?>       
    </body>
</html>
