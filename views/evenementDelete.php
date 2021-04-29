<?PHP
	include "../controller/evenementC.php";

	$evenementC=new evenementC();
	
	if (isset($_POST["IdEvenement"])){
		$evenementC->supprimerEvenement($_POST["IdEvenement"]);
		header('Location:../views/evenementView.php');
	}
?>