<?PHP
	require_once 'config.php';
	require_once 'Evenenement.php';

	class EvenementC {
		
		function ajouterEvenement($Evenenement){
			$sql="INSERT INTO evenement (TitreEvenement, LieuEvenement, DateEvenement,DureeEvenement,DescriptionEvenement) 
			VALUES (:TitreEvenement,:LieuEvenement,:DateEvenement, :DureeEvenement, :DescriptionEvenement)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'TitreEvenement' => $Evenenement->getTitreEvenement(),
					'LieuEvenement' => $Evenenement->getLieuEvenement(),
					'DateEvenement' => $Evenenement->getDateEvenement(),
					'DureeEvenement' => $Evenenement->getDureeEvenement(),
					'DescriptionEvenement' => $Evenenement->getDescriptionEvenement(),
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherEvenement(){
			
			$sql="SELECT * FROM evenement";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerEvenement($IdEvenement){
			$sql="DELETE FROM evenement WHERE IdEvenement= :IdEvenement";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':IdEvenement',$IdEvenement);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierEvenement($Evenenement, $IdEvenement){
			
			try {
				echo $Evenenement->getTitreEvenement();
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE evenement SET 
						TitreEvenement = :TitreEvenement, 
						LieuEvenement = :LieuEvenement,
						DateEvenement = :DateEvenement,
						DureeEvenement = :DureeEvenement,
						DescriptionEvenement = :DescriptionEvenement
						
					WHERE IdEvenement = :IdEvenement'
				);
				$query->execute([
					'TitreEvenement' => $Evenenement->getTitreEvenement(),
					'LieuEvenement' => $Evenenement->getLieuEvenement(),
					'DateEvenement' => $Evenenement->getDateEvenement(),
					'DureeEvenement' => $Evenenement->getDureeEvenement(),
					'DescriptionEvenement' => $Evenenement->getDescriptionEvenement(),	

					'IdEvenement' => $IdEvenement
				]);
				echo $query->execute;
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererEvenement($IdEvenement){
			$sql="SELECT * from evenement where IdEvenement=$IdEvenement";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererEvenement1($IdEvenement){
			$sql="SELECT * from evenement where IdEvenement=$IdEvenement";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>