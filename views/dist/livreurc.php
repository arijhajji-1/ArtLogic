<?PHP
require_once 'C:/wamp64/www/backend/dist/config.php';
require_once 'C:/wamp64/www/backend/dist/livreurc.php';
require_once 'C:/wamp64/www/backend/dist/livreur.php';

class livreurc
 {
 /*	
   function afficherlivreurs ($livreur)
   {
		echo "IDlivreur: ".$livreur->getidlivreur()."<br>";
		echo "Matricule : ".$livreur->Matricule()."<br>";
		echo "NOMlivreur : ".$livreur->getNOMlivreur()."<br>";
		echo "NUM : ".$livreur->getNUM()."<br>";
		echo "ZONE:" .$livreur->getZONE()."<br>";
        echo "ZONE:" .$livreur->getZONE()."<br>";
	} */
	

	public function ajouterlivreur($livreur)
	{

		$sql="INSERT INTO livreur (IDlivreur,Matricule,NOMlivreur,NUM,ZONE) values (:IDlivreur, :Matricule,:NOMlivreur,:NUM,:ZONE)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $IDlivreur=$livreur->getreferef();
        $Matricule=$livreur->getidpr();
        $NOMlivreur=$livreur->getdatedeb();
        $NUM=$livreur->getdatef();
        $ZONE=$livreur->getpourc();
		$req->bindValue(':IDlivreur',$IDlivreur);
		$req->bindValue(':Matricule',$Matricule);
		$req->bindValue(':NOMlivreur',$NOMlivreur);
		$req->bindValue(':NUM',$NUM);
		$req->bindValue(':ZONE',$ZONE) ;

		/*$sql="SELECT * FROM produit where refproduit='$Matricule'";
		$query=$db->prepare($sql);
        $query->execute();

        if($data=$query->fetch())
        {
        $prix=$data['prixproduit'];	
        }
        $nouveauprix=$prix-($prix*$ZONE)/100;

		$sql = "UPDATE produit SET enlivreur=1  ,nouveauprix='$nouveauprix'  WHERE refproduit='$Matricule'";
		$query=$db->prepare($sql);
		$query->execute();
            $req->execute();*/
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }}
		
	

		






	
	public function afficherlivreur(){
		$sql="SELECT * from livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	public function trilivreur(){
		$sql="SELECT * from livreur ORDER by NOMlivreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	public function supprimerlivreur($IDlivreur){
		$sql="DELETE FROM livreur where IDlivreur= :IDlivreur";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':IDlivreur',$IDlivreur);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	public function modifier($livreur,$IDlivreur){
        $sql="UPDATE livreur SET  IDlivreur=:IDlivreur , Matricule=:Matricule , NOMlivreur=:NOMlivreur ,NUM=:NUM ,ZONE=:ZONE  WHERE IDlivreur=$IDlivreur";
        $db = config::getConnexion();

        try{
        $req=$db->prepare($sql);
         $IDlivreur=$livreur->getIDlivreur();
        $Matricule=$livreur->getMatricule();
        $NOMlivreur=$livreur->getNOMlivreur();
        $NUM=$livreur->getNUM();
        $ZONE=$livreur->getZONE();
		$req->bindValue(':IDlivreur',$IDlivreur);
		$req->bindValue(':Matricule',$Matricule);
		$req->bindValue(':NOMlivreur',$NOMlivreur);
		$req->bindValue(':NUM',$NUM);
		$req->bindValue(':ZONE',$ZONE) ;

                
            $req->execute();

        ob_start();
       header("Location:livreur.php");
       exit();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        }


	public function recupererlivreur($IDlivreur)
	{
		$sql="SELECT * from livreur where IDlivreur=$IDlivreur";
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