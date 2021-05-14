<?PHP
	include '../config.php';
	include '../model/categorie.php';

	class categorieC {
		
		function ajoutercategorie($categorie){
			$sql="INSERT INTO categorie (Id_categorie, NomC, DescriptionC) 
			VALUES (:Id_categorie, :NomC, :DescriptionC)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'Id_categorie' => $categorie->getId_categorie(),
					'NomC' => $categorie->getNomC(),
					'DescriptionC' => $categorie->getDescriptionC(),
				
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function affichercategorie(){
			
			$sql="SELECT * FROM categorie";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
        

		function supprimercategorie($Id_categorie){
			$sql="DELETE FROM categorie WHERE Id_categorie= :Id_categorie";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':Id_categorie',$Id_categorie);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		} 
        

		function modifiercategorie($categorie,$Id_categorie){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE categorie SET 
						NomC = :NomC, 
						DescriptionC = :DescriptionC		
					WHERE Id_categorie = :Id_categorie'
				);
				$query->execute([
					'NomC' => $categorie->getNomC(),
					'DescriptionC' => $categorie->getDescriptionC(),                 
					'Id_categorie' => $Id_categorie
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		} 





		public function getcatById($Id_categorie) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM categorie WHERE Id_categorie = :Id_categorie'
                );
                $query->execute([
                    'Id_categorie' => $Id_categorie
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }



		
		
	}

?>