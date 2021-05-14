<?PHP
	include '../config.php';
	require_once '../Model/Actualite.php';

	class actualiteC {
		
		function ajouterActualite($Actualite){
			$sql="INSERT INTO actualite (TitreActualite, DateActualite, DescriptionActualite,ImageActualite) 
			VALUES (:TitreActualite,:DateActualite, :DescriptionActualite, :ImageActualite)";
			$db = getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'TitreActualite' => $Actualite->getTitreActualite(),
					'DateActualite' => $Actualite->getDateActualite(),
					'DescriptionActualite' => $Actualite->getDescriptionActualite(),
					'ImageActualite' => $Actualite->getImageActualite(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherActualite(){
			$sql="SELECT * FROM actualite";
			$db = getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
			
		}

		function afficherActualite2(){
			$sql="SELECT * FROM actualite INNER JOIN evenement ON actualite.DateActualite = evenement.DateEvenement AND actualite.TitreActualite = evenement.TitreEvenement ";
			$db = getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

        function trierActualite(){
			
			$sql="SELECT * FROM actualite order by DateActualite";
			$db = getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function trierActualite1(){
			
			$sql="SELECT * FROM actualite order by TitreActualite";
			$db = getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerActualite($IdActualite){
			$sql="DELETE FROM actualite WHERE IdActualite= :IdActualite";
			$db = getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':IdActualite',$IdActualite);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierActualite($Actualite, $IdActualite){
			
			try {
				echo $Actualite->getTitreActualite();
				$db = getConnexion();
				$query = $db->prepare(
					'UPDATE actualite SET 
						TitreActualite = :TitreActualite,
						DateActualite = :DateActualite,
						DescriptionActualite = :DescriptionActualite,
						ImageActualite = :ImageActualite
					    WHERE IdActualite = :IdActualite'
				);
				$query->execute([
					'TitreActualite' => $Actualite->getTitreActualite(),
					'DateActualite' => $Actualite->getDateActualite(),
					'DescriptionActualite' => $Actualite->getDescriptionActualite(),
					'ImageActualite' => $Actualite->getImageActualite(),	
					'IdActualite' => $IdActualite
				]);
				echo $query->execute;
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		function recupererActualite($IdActualite){
			$sql="SELECT * from actualite where IdActualite=$IdActualite";
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

		function recupererActualite1($IdActualite){
			$sql="SELECT * from actualite where IdActualite=$IdActualite";
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