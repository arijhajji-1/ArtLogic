<?PHP
	include '../config.php';
	require_once '../model/Evenenement.php';

	class EvenementC {
		
		function ajouterEvenement($Evenenement){
			$sql="INSERT INTO evenement (TitreEvenement, LieuEvenement, DateEvenement,DureeEvenement,DescriptionEvenement,ImageEvenement) 
			VALUES (:TitreEvenement,:LieuEvenement,:DateEvenement, :DureeEvenement, :DescriptionEvenement, :ImageEvenement)";
			$db = getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'TitreEvenement' => $Evenenement->getTitreEvenement(),
					'LieuEvenement' => $Evenenement->getLieuEvenement(),
					'DateEvenement' => $Evenenement->getDateEvenement(),
					'DureeEvenement' => $Evenenement->getDureeEvenement(),
					'DescriptionEvenement' => $Evenenement->getDescriptionEvenement(),
					'ImageEvenement' => $Evenenement->getImageEvenement(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherEvenement(){
			$sql="SELECT * FROM evenement";
			$db = getConnexion();
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
			$db = getConnexion();
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
				$db = getConnexion();
				$query = $db->prepare(
					'UPDATE evenement SET 
						TitreEvenement = :TitreEvenement, 
						LieuEvenement = :LieuEvenement,
						DateEvenement = :DateEvenement,
						DureeEvenement = :DureeEvenement,
						DescriptionEvenement = :DescriptionEvenement,
						ImageEvenement = :ImageEvenement
					    WHERE IdEvenement = :IdEvenement'
				);
				$query->execute([
					'TitreEvenement' => $Evenenement->getTitreEvenement(),
					'LieuEvenement' => $Evenenement->getLieuEvenement(),
					'DateEvenement' => $Evenenement->getDateEvenement(),
					'DureeEvenement' => $Evenenement->getDureeEvenement(),
					'DescriptionEvenement' => $Evenenement->getDescriptionEvenement(),
					'ImageEvenement' => $Evenenement->getImageEvenement(),	
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
			$db = getConnexion();
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

		function trierEvenement(){
			
			$sql="SELECT * FROM evenement order by DateEvenement";
			$db = getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		
		function trierEvenement1(){
			
			$sql="SELECT * FROM evenement order by DureeEvenement";
			$db = getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function recupererEvenement1($IdEvenement){
			$sql="SELECT * from evenement where IdEvenement=$IdEvenement";
			$db = getConnexion();
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