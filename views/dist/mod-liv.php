<?PHP
include "C:/wamp64/www/Artlogic/entities/livreur.php";
include "C:/wamp64/www/Artlogic/core/livreurC.php";

if (isset($_POST['modifier'])){
	$livreur=new livreur($_POST['Nomlivreur'],$_POST['Matricule'],$_POST['Zone'],$_POST['Numlivreur']);
	$livreurC=new livreurC();
	$livreurC->modifierlivreur($livreur,$_POST['IDlivreuris']);
	echo $_GET['IDlivreur'];
	header('Location: afficherlivreur.php');
}
?>