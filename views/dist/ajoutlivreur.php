<?PHP
include "../../entities/livreur.php";
include "../../core/livreurC.php";
echo "hell";
if (isset($_POST['Nomlivreur']) and isset($_POST['Matricule']) and isset($_POST['Zone']) and isset($_POST['Numlivreur'])){
$livreur1=new livreur($_POST['Nomlivreur'],$_POST['Matricule'],$_POST['Zone'],$_POST['Numlivreur']);
$livreur1C=new livreurC();

$livreur1C->ajouterlivreur($livreur1);
header('Location: afficherlivreur.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>