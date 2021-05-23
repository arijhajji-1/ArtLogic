<?PHP
	include "../controller/evenementC.php";

	$evenementC=new evenementC();
	$listeevenement=$evenementC->afficherEvenement();

	if(isset($_POST['submit']))
{
    $listeevenement=$evenementC->trierEvenement();
}
if(isset($_POST['submit1']))
{
    $listeevenement=$evenementC->trierEvenement1();
}
if(isset($_POST['submit2']))
{
    header('Location:evenementStat.php');
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
	 <title>Artlogic Admin</title>
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
		
       <span class="contact100-form-title">

                Liste des evenements
                </span> 
		 <br>
		<form method="POST" action="">
			<table>
				<tr>
<td><button type="submit" id="triDate" name="submit" class="contact100-form-btn"> trier par date </button></td> 
<td><button type="submit" id="triDuree" name="submit1" class="contact100-form-btn"> trier par Duree </button></td>
<td><button type="submit" id="triDuree" name="submit2" class="contact100-form-btn"> Stat par Duree </button></td>
</tr>
</table>
        </form> 
                 
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
					<td ><img src="../i/<?PHP echo $image ?>" alt="Texte Alternatif" width="100" height="100"> </td> <!-- affichage -->
					
					<td >

						<form method="POST" action="evenementDelete.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $Evenenement['IdEvenement']; ?> name="IdEvenement">
						</form>
					</td>
					<td >
						<a href="evenementUpdate.php?IdEvenement=<?PHP echo $Evenenement['IdEvenement']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
            
		</table>   
		<br>
		<form class="form-inline" method="post" action="../libs/generate_pdf.php">
<button type="submit" id="pdf" name="generate_pdf" class="contact100-form-btn">Generate PDF</button> 
        </form> 
		   
            <!-- footer -->
            <?php include_once 'footer.php'; ?>       
    </body>
</html>
