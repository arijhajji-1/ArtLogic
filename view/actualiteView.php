<?PHP
	include "../Controller/actualiteC.php";

	$actualiteC=new actualiteC();
	$listeactualite=$actualiteC->afficherActualite();
if(isset($_POST['submi']))
{
    $listeactualite=$actualiteC->afficherActualite();
}
if(isset($_POST['submit']))
{
    $listeactualite=$actualiteC->trierActualite();
}
if(isset($_POST['submit1']))
{
    $listeactualite=$actualiteC->trierActualite1();
}
if(isset($_POST['submit2']))
{
    $listeactualite=$actualiteC->afficherActualite2();
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

                 Liste des Actualites
                </span> 
		<form method="POST" action="">
			<table>
				<tr>
<td><div class="container-contact100-form-btn">
<button type="submit" id="trititre" name="submit" class="contact100-form-btn"> afficher les News  </button>
</div></td>
<td><div class="container-contact100-form-btn">
<button type="submit" id="triDate" name="submit" class="contact100-form-btn"> trier par date </button> 
</div></td>
<td><div class="container-contact100-form-btn">
<button type="submit" id="trititre" name="submit1" class="contact100-form-btn"> trier par titre </button>
</div></td>
<td><div class="container-contact100-form-btn">
<button type="submit" id="trititre" name="submit2" class="contact100-form-btn"> afficher les News en meme temp Event </button>
</div></td>
</tr>
</table>
        </form>   
		<table   >
        
			<tr >
				<th ><strong>Id Actualite</strong></th>
				<th ><strong>Titre Actualite</strong></th>
				<th ><strong>Date Actualite</strong></th>
				<th ><strong>Description Actualite</strong></th>
				<th ><strong>Image Actualite</strong></th>
				<th ><strong>supprimer</strong></th>
				<th ><strong>modifier</strong></th>
			</tr>

			<?PHP
				foreach($listeactualite as $Actualite){
					$image = $Actualite['ImageActualite']; // source iamge
                     
			?>
				<tr>
					<td ><?PHP echo $Actualite['IdActualite']; ?></td>
					<td ><?PHP echo $Actualite['TitreActualite']; ?></td>
					<td ><?PHP echo $Actualite['DateActualite']; ?></td>
					<td ><?PHP echo $Actualite['DescriptionActualite']; ?></td>
					<td ><img src="../i/<?PHP echo $image ?>" alt="Texte Alternatif" width="100" height="100"> </td> <!-- affichage -->
					
					<td >
						<form method="POST" action="actualiteDelete.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $Actualite['IdActualite']; ?> name="IdActualite">
						</form>
					</td>
					<td >
						<a href="actualiteUpdate.php?IdActualite=<?PHP echo $Actualite['IdActualite']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
            
		</table> 
		<br>
		<form class="form-inline" method="post" action="../libs/generate_pdfActualite.php">
			<table>
<tr><td><button type="submit" id="pdf" name="generate_pdf" class="contact100-form-btn"></i>Generate PDF</button></td> </tr>
</table>
        </form>         
            <!-- footer -->
            <?php include_once 'footer.php'; ?>       
    </body>
</html>
