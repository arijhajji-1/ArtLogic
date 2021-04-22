<?PHP
	include "evenementC.php";

	$evenementC=new evenementC();
	
	if (isset($_POST["IdEvenement"])){
		$evenementC->supprimerEvenement($_POST["IdEvenement"]);
		header('Location:evenementView.php');
	}

?>