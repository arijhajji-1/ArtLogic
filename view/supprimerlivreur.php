<?PHP

include "../Controller/livreurC.php";
$livreurC=new livreurC();
if (isset($_POST["IDlivreur"])){
	$livreurC->supprimerlivreur($_POST["IDlivreur"]);
	header('Location: afficherlivreur.php');
}

?>