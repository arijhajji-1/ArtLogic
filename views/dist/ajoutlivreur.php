<?PHP
include "../../entities/livreur.php";
include "../../core/livreurC.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['secteur']) and isset($_POST['mail'])){
$livreur1=new livreur($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['secteur'],$_POST['mail']);
$livreur1C=new livreurC();
$livreur1C->ajouterlivreur($livreur1);
header('Location: afficherlivreur.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>