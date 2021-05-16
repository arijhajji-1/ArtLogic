<?PHP

include "../Controller/livraisonC.php";
$livraisonC=new livraisonC();
if (isset($_POST["IDlivraison"])){
	$livraisonC->supprimerlivraison($_POST["IDlivraison"]);
	header('Location: afficherlivraisons.php');
}

?>