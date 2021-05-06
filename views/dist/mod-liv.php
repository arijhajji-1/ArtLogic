<?PHP
include "C:/wamp64/www/Artlogic/entities/livreur.php";
include "C:/wamp64/www/Artlogic/core/livreurC.php";

if (isset($_POST['modifier'])){
	$livreur=new livreur($_POST['IDlivreur'],$_POST['Nomlivreur'],$_POST['Matricule'],$_POST['Zone'],$_POST['Numlivreur']);
	$livreurC=new livreurC();
	$livreurC->modifierlivreur($livreur,$_POST['IDlivreur_ini']);
	echo $_POST['IDlivreur_ini'];
	header('Location: afficherlivreur.php');
}
?>