<?PHP
include "../../entities/livraison.php";
include "../../core/livraisonC.php";

if (isset($_POST['IDproduit']) and isset($_POST['Nomcat']) and isset($_POST['IDclient']) and isset($_POST['NUMclient'])){
$livraison1=new livraison($_POST['IDproduit'],$_POST['Nomcat'],$_POST['IDclient'],$_POST['NUMclient']);
$livraison1C=new livraisonC();
$livraison1C->ajouterlivraison($livraison1);
header('Location: afficherlivraisons.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>