<?PHP
	include "../controller/actualiteC.php";

	$actualiteC=new actualiteC();
	
	if (isset($_POST["IdActualite"])){
		$actualiteC->supprimerActualite($_POST["IdActualite"]);
		header('Location:../views/actualiteView.php');
	}
?>