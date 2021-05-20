<?PHP
	include '../connection.php';
	include '../Model/produit.php';

	class produitC {
		
		function ajouterproduit($produit){
			$sql="INSERT INTO produit (NomP, DateA, Description1, Genre, Couleur,Taille,poids,Prix,Quantite,image,id_userA) 
			VALUES (:NomP, :DateA, :Description1, :Genre, :Couleur, :Taille, :poids, :Prix,:Quantite,:image,:id_userA)";
			$db = connection::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
				//	'Id_produit' => $produit->getId_produit(),
					'NomP' => $produit->getNomP(),
					'DateA' => $produit->getDateA(),
					'Description1' => $produit->getDescription1(),
					'Genre' => $produit->getGenre(),
					'Couleur' => $produit->getCouleur(),
					'Taille' => $produit->getTaille(),
					'poids' => $produit->getpoids(),
                    'Prix'=> $produit->getPrix(),
                    'Quantite'=> $produit->getQuantite(),
					'image'=> $produit->getimage(),
					'id_userA'=> $produit->getid_userA(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherproduit(){
			
			$sql="SELECT * FROM produit";
			$db = connection::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
        

		function supprimerproduit($Id_produit){
			$sql="DELETE FROM produit WHERE Id_produit= :Id_produit";
			$db = connection::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':Id_produit',$Id_produit);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		} 
        

		function modifierproduit($produit,$Id_produit){
			try {
				$db = connection::getConnexion();
				$query = $db->prepare(
					'UPDATE produit SET
					    NomP = :NomP, 
						DateA = :DateA, 
						Description1 = :Description1,
						Genre = :Genre,
						Couleur = :Couleur,
						Taille = :Taille,
						poids = :poids,
						Prix = :Prix,
                        Quantite = :Quantite,
						image = :image
					WHERE Id_produit = :Id_produit'
				);
				$query->execute([
					'NomP' => $produit->getNomP(),
					'DateA' => $produit->getDateA(),
					'Description1' => $produit->getDescription1(),
					'Genre' => $produit->getGenre(),
					'Couleur' => $produit->getCouleur(),
					'Taille' => $produit->getTaille(),
					'poids' => $produit->getpoids(),
					'Prix' => $produit->getPrix(),
                    'Quantite'=> $produit->getQuantite(),   
					'image'=> $produit->getimage(),               
					'Id_produit' => $Id_produit
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		} 





		public function getprodById($Id_produit) {
            try {
                $pdo = connection::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM produit WHERE Id_produit = :Id_produit'
                );
                $query->execute([
                    'Id_produit' => $Id_produit
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
  
		public function getprodByGenre($Genre) {
            try {
                $pdo = connection::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM produit WHERE Genre = :Genre'
                );
                $query->execute([
                    'Genre' => $Genre
                ]);
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
		
		

		
     

		function trierproduit(){
			
			$sql="SELECT * FROM produit order by Prix";
			$db = connection::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		} 


		function trierproduitdesc(){
			
			$sql="SELECT * FROM produit order by Prix desc";
			$db = connection::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
   
	/*	function rechercherproduit($Couleur){
			
			$sql="SELECT * FROM produit where Couleur=:Couleur";
			$db = connection::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			
			$query->execute([		
				'Couleur' => $produit->getCouleur(),
			]);
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}*/

		public function rechercherproduit($nomh) {
            try { 
                $pdo = connection::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM produit  WHERE NomP like ("%":st"%")'
                );
                $query->execute(['st' => $nomh]);
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

		function recupererProduit($Id_produit){
	$sql="SELECT * from produit where Id_produit= $Id_produit";
	$db = connection::getConnexion();
	try{
		$sth = $db->prepare($sql);
		$sth->execute();
		$liste = $sth->fetch();

		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}

        function modifierNouveauPrix($Id_produit){
            try {
                $db = connection::getConnexion();
                $query = $db->prepare(
                    'UPDATE produit SET nouveauPrix = "0"
					WHERE Id_produit = :Id_produit'
                );
                $query->execute([
                    'Id_produit' => $Id_produit
                ]);
                echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

    }

?>