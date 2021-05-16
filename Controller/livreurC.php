<?PHP
include_once "../configc.php";
class livreurC{
function afficherlivreur ($livreur){
		echo "IDlivreur : ".$livreur->getIDlivreur()."<br>";
		echo "Nomlivreur  : ".$livreur->getNomlivreur()."<br>";
		echo "Matricule   : ".$livreur->getMatricule()."<br>";
		echo "Zone  : ".$livreur->getZone()."<br>";
		echo "Numlivreur: ".$livreur->getNumlivreur()."<br>";
	}

	function ajouterlivreur($livreur){
		$sql="insert into livreur (Nomlivreur  ,Matricule  ,Zone  ,Numlivreur) values (:Nomlivreur  ,:Matricule  ,:Zone  ,:Numlivreur)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $Nomlivreur  =$livreur->getNomlivreur();
        $Matricule  =$livreur->getMatricule();
        $Zone  =$livreur->getZone();
        $Numlivreur=$livreur->getNumlivreur();
		
		$req->bindValue(':Nomlivreur',$Nomlivreur);
		$req->bindValue(':Matricule',$Matricule);
		$req->bindValue(':Zone',$Zone);
		$req->bindValue(':Numlivreur',$Numlivreur);		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherlivreurs(){
		//$sql="SElECT * From livreur e inner join formationphp.livreur a on e.IDlivreur = a.IDlivreur ";
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
	function supprimerlivreur($IDlivreur ){
		$sql="DELETE FROM livreur where IDlivreur = :IDlivreur";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':IDlivreur',$IDlivreur );
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	/*function modifierlivreur($livreur,$IDlivreur ){
		$sql="UPDATE livreur SET IDlivreur =:IDlivreur n, Nomlivreur  =:Nomlivreur  ,Matricule  =:Matricule  ,Zone  =:Zone   WHERE IDlivreur =:IDlivreur ";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
		$req=$db->prepare($sql);
		
		$IDlivreur n=$livreur->getIDlivreur ();
        $Nomlivreur  =$livreur->getNomlivreur  ();
        $Matricule  =$livreur->getMatricule  ();
        $Zone  =$livreur->getZone  ();
		$datas = array(':IDlivreur n'=>$IDlivreur n, ':IDlivreur '=>$IDlivreur , ':Nomlivreur  '=>$Nomlivreur  ,':Matricule  '=>$Matricule  ,':Zone  '=>$Zone  ,':Numlivreur'=>$Numlivreur);
		$req->bindValue(':IDlivreur n',$IDlivreur n);
		$req->bindValue(':IDlivreur ',$IDlivreur );
		$req->bindValue(':Nomlivreur  ',$Nomlivreur  );
		$req->bindValue(':Matricule  ',$Matricule  );
		$req->bindValue(':Zone  ',$Zone  );		
		$req->bindValue(':Numlivreur',$Numlivreur);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}*/
	
	function modifierlivreur($livreur,$IDlivreur){
		try {
			$db = config::getConnexion();
			$query = $db->prepare(
				'UPDATE livreur SET
					Nomlivreur = :Nomlivreur, 
					Matricule = :Matricule, 
					Zone = :Zone,
					Numlivreur = :Numlivreur
				WHERE IDlivreur = :IDlivreur'
			);
			$query->execute([
				'Nomlivreur' => $livreur->getNomlivreur(),
				'Matricule' => $livreur->getMatricule(),
				'Zone' => $livreur->getZone(),
				'Numlivreur' => $livreur->getNumlivreur(),
				               
				'IDlivreur' => $IDlivreur
			]);
			echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			$e->getMessage();
		}
	} 
	function recupererlivreur($IDlivreur ){
		$sql="SELECT * from livreur where IDlivreur =$IDlivreur ";
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
        $sql="SELECT * From livreur ORDER BY(Zone  ) ASC";
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