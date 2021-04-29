<?PHP
include_once "C:/wamp64/www/Artlogic/core/livraisonC.php";
$livraisonC=new livraisonC();
if (isset($_POST["IDlivraison"])){
	$livraisonC->supprimerlivraison($_POST["IDlivraison"]);
	header('Location: afficherlivraisons.php');
}

?>