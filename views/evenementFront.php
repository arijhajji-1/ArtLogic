<?PHP
	include "../controller/evenementC.php";
	$evenementC=new evenementC();
	$listeevenement=$evenementC->afficherEvenement();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" >
		<title>ArtLogic</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="../assets/img/logo.png" type="../assets/img/logo.png">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Rubik:100,200,300,400,600,500,700,800,900|Karla:100,200,300,400,500,600,700,800,900&amp;subset=latin" rel="stylesheet">
		<!-- Bootstrap 4.3.1 CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- Slick 1.8.1 jQuery plugin CSS (Sliders) -->
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
		<!-- Fancybox 3 jQuery plugin CSS (Open images and video in popup) -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
		<!-- AOS 2.3.1 jQuery plugin CSS (Animations) -->
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<!-- FontAwesome CSS -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<!-- Startup 3 CSS (Styles for all blocks) -->
		<link href="../css/style1.css" rel="stylesheet" />
		<!-- my css -->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- jQuery 3.3.1 -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	</head> 


<!-- Contient  -->
<style>
.content {
  max-width: 500px;
  margin: auto;
}
</style>

<body >
    <?php include_once 'headerfront.php'; ?>
	<?PHP
				foreach($listeevenement as $Evenenement){
			    $image = $Evenenement['ImageEvenement']; // source iamge
                
		?>
	<div class="content" >
      <div class="w3-container w3-light-grey">
	   <img src="../assets/img/<?PHP echo $image ?>" alt="Texte Alternatif" width="300" height="300">
        <p><b><?PHP echo $Evenenement['TitreEvenement']; ?></b></p>
        <p><?PHP echo $Evenenement['DateEvenement']; ?> |<?PHP echo $Evenenement['DureeEvenement']; ?> jour(s) <br> Description: <br> <?PHP echo $Evenenement['DescriptionEvenement']; ?></p>
		<div> __________________________________________________  </div>
		<br>
		</div >
    </div>		
	<?PHP } ?>	
        
		



<!-- Footer -->
<?php include_once 'footerfront.php'; ?> 

</body>
</html>