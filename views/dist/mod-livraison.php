<?PHP
include "C:/wamp64/www/Artlogic/entities/livraison.php";
include "C:/wamp64/www/Artlogic/core/livraisonC.php";

if (isset($_POST['modifier'])){
	$livraison=new livraison($_POST['IDlivraison'],$_POST['IDproduit'],$_POST['Nomcat'],$_POST['IDclient'],$_POST['NUMclient']);
	$livraisonC=new livraisonC();
	$livraisonC->modifierlivraison($livraison,$_POST['IDlivraison']);
	echo $_POST['IDlivraison_ini'];
	header('Location: afficherlivraisons.php');
}
?>