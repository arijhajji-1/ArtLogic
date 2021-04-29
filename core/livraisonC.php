<?PHP
include_once "../../config.php";
class livraisonC {
function afficherlivraison ($livraison){
		echo "IDlivraison: ".$livraison->getIDlivraison()."<br>";
		echo "IDproduit: ".$livraison->getIDproduit()."<br>";
		echo "Nomcat: ".$livraison->getNomcat()."<br>";
		echo "IDclient: ".$livraison->getIDclient()."<br>";
		echo "NUMclient: ".$livraison->getNUMclient()."<br>";
	}
	function ajouterlivraison($livraison){
		$sql="insert into livraison (IDlivraison,IDproduit,Nomcat,IDclient,NUMclient) values (:IDlivraison, :IDproduit,:Nomcat,:IDclient,:NUMclient)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $IDlivraison=$livraison->getIDlivraison();
        $IDproduit=$livraison->getIDproduit();
        $Nomcat=$livraison->getNomcat();
        $IDclient=$livraison->getIDclient();
        $NUMclient=$livraison->getNUMclient();
		$req->bindValue(':IDlivraison',$IDlivraison);
		$req->bindValue(':IDproduit',$IDproduit);
		$req->bindValue(':Nomcat',$Nomcat);
		$req->bindValue(':IDclient',$IDclient);
		$req->bindValue(':NUMclient',$NUMclient);		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherlivraisons(){
		//$sql="SElECT * From livraison e inner join formationphp.livraison a on e.IDlivraison= a.IDlivraison";
		$sql="SElECT * From livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerlivraison($IDlivraison){
		$sql="DELETE FROM livraison where IDlivraison= :IDlivraison";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':IDlivraison',$IDlivraison);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	/*function modifierlivraison($livraison,$IDlivraison){
		$sql="UPDATE livraison SET IDlivraison=:IDlivraisonn, IDproduit=:IDproduit,Nomcat=:Nomcat,IDclient=:IDclient WHERE IDlivraison=:IDlivraison";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
		$req=$db->prepare($sql);
		
		$IDlivraisonn=$livraison->getIDlivraison();
        $IDproduit=$livraison->getIDproduit();
        $Nomcat=$livraison->getNomcat();
        $IDclient=$livraison->getIDclient();
		$datas = array(':IDlivraisonn'=>$IDlivraisonn, ':IDlivraison'=>$IDlivraison, ':IDproduit'=>$IDproduit,':Nomcat'=>$Nomcat,':IDclient'=>$IDclient,':NUMclient'=>$NUMclient);
		$req->bindValue(':IDlivraisonn',$IDlivraisonn);
		$req->bindValue(':IDlivraison',$IDlivraison);
		$req->bindValue(':IDproduit',$IDproduit);
		$req->bindValue(':Nomcat',$Nomcat);
		$req->bindValue(':IDclient',$IDclient);		
		$req->bindValue(':NUMclient',$NUMclient);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}*/
	public function modifierlivraison($livraison,$IDlivraison)
	{
	  $sql="UPDATE `livraison` SET `IDlivraison`=:IDlivraison,`IDproduit`=:IDproduit,`Nomcat`=:Nomcat,`IDclient`=:IDclient,`NUMclient`=:NUMclient WHERE IDlivraison = '".$IDlivraison."' ;";

  
	  $connexion=config::getConnexion();
	  $rep=$connexion->prepare($sql);
	  $rep->bindValue(":IDlivraison",$livraison->getIDlivraison());
	  $rep->bindValue(":IDproduit",$livraison->getIDproduit());
	  $rep->bindValue(":Nomcat",$livraison->getNomcat());
	  $rep->bindValue(":IDclient",$livraison->getIDclient());
	  $rep->bindValue(":NUMclient",$livraison->getNUMclient());
	 
	  
	  
	  $rep->execute();

	}
	function recupererlivraison($IDlivraison){
		$sql="SELECT * from livraison where IDlivraison=$IDlivraison";
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