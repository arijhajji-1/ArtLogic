<?PHP
include "C:/wamp64/www/Artlogic/entities/livreur.php";
include "C:/wamp64/www/Artlogic/core/livreurC.php";

if (isset($_POST['modifier'])){
	$livreur=new livreur($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['secteur'],$_POST['mail']);
	$livreurC=new livreurC();
	$livreurC->modifierlivreur($livreur,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: afficherlivreur.php');
}
?>