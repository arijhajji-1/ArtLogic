<?PHP
	include '../connection.php';
	include '../model/produit.php';

	class produitC {
		
		function ajouterproduit($produit){
			$sql="INSERT INTO produit (Id_produit, DateA, Description1, Genre, Couleur,Taille,poids,Prix,Quantite,image) 
			VALUES (:Id_produit, :DateA, :Description1, :Genre, :Couleur, :Taille, :poids, :Prix,:Quantite,:image)";
			$db = connection::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'Id_produit' => $produit->getId_produit(),
					'DateA' => $produit->getDateA(),
					'Description1' => $produit->getDescription1(),
					'Genre' => $produit->getGenre(),
					'Couleur' => $produit->getCouleur(),
					'Taille' => $produit->getTaille(),
					'poids' => $produit->getpoids(),
                    'Prix'=> $produit->getPrix(),
                    'Quantite'=> $produit->getQuantite(),
					'image'=> $produit->getimage(),
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
                    'SELECT * FROM produit  WHERE Couleur like ("%":st"%")'
                );
                $query->execute(['st' => $nomh]);
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

		
		
	}

?>