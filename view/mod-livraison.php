<?PHP
include "../Model/livraison.php";
include "../Controller/livraisonC.php";

if (isset($_POST['modifier'])){
	$livraison=new livraison($_POST['IDproduit'],$_POST['Nomcat'],$_POST['IDclient'],$_POST['NUMclient']);
	$livraisonC=new livraisonC();
	$livraisonC->modifierlivraison($livraison,$_POST['IDlivraison']);
	echo $_POST['IDlivraison'];
	header('Location: afficherlivraisons.php');
}
?>