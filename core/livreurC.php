<?PHP
include_once "../../config.php";
class livreurC {
function afficherlivreur ($livreur){
		echo "Cin: ".$livreur->getCin()."<br>";
		echo "Nom: ".$livreur->getNom()."<br>";
		echo "Prénom: ".$livreur->getPrenom()."<br>";
		echo "secteur: ".$livreur->getSecteur()."<br>";
		echo "mail: ".$livreur->getmail()."<br>";
	}
	function ajouterlivreur($livreur){
		$sql="insert into livreur (cin,nom,prenom,secteur,mail) values (:cin, :nom,:prenom,:secteur,:mail)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cin=$livreur->getCin();
        $nom=$livreur->getNom();
        $prenom=$livreur->getPrenom();
        $secteur=$livreur->getSecteur();
        $mail=$livreur->getmail();
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':secteur',$secteur);
		$req->bindValue(':mail',$mail);		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherlivreurs(){
		//$sql="SElECT * From livreur e inner join formationphp.livreur a on e.cin= a.cin";
		$sql="SElECT * From livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerlivreur($cin){
		$sql="DELETE FROM livreur where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	/*function modifierlivreur($livreur,$cin){
		$sql="UPDATE livreur SET cin=:cinn, nom=:nom,prenom=:prenom,secteur=:secteur WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
		$req=$db->prepare($sql);
		
		$cinn=$livreur->getCin();
        $nom=$livreur->getNom();
        $prenom=$livreur->getPrenom();
        $secteur=$livreur->getSecteur();
		$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':secteur'=>$secteur,':mail'=>$mail);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':secteur',$secteur);		
		$req->bindValue(':mail',$mail);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}*/
	public function modifierlivreur($livreur,$cin)
	{
	  $sql="UPDATE `livreur` SET `cin`=:cin,`nom`=:nom,`prenom`=:prenom,`secteur`=:secteur,`mail`=:mail WHERE cin = '".$cin."' ;";

  
	  $connexion=config::getConnexion();
	  $rep=$connexion->prepare($sql);
	  $rep->bindValue(":cin",$livreur->getCin());
	  $rep->bindValue(":nom",$livreur->getNom());
	  $rep->bindValue(":mail",$livreur->getMail());
	  $rep->bindValue(":prenom",$livreur->getPrenom());
	  $rep->bindValue(":secteur",$livreur->getSecteur());
	  
	  $rep->execute();

	}
	function recupererlivreur($cin){
		$sql="SELECT * from livreur where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function trieListelivreurs(){
        $sql="SELECT * From livreur ORDER BY(secteur) ASC";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	
}

?>