<?PHP
include_once "C:/wamp64/www/Artlogic/core/livreurC.php";
$livreurC=new livreurC();
if (isset($_POST["cin"])){
	$livreurC->supprimerlivreur($_POST["cin"]);
	header('Location: afficherlivreur.php');
}

?>