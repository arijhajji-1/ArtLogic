<?PHP
require_once 'config.php';
require_once '../controllers/promotionc.php';
require_once '../controllers/produitC.php';
require_once '../model/produit.php';
class promotionc
 {
 /*	
   function afficherpromotions ($promotion)
   {
		echo "reference: ".$promotion->getreference()."<br>";
		echo "id produit : ".$promotion->id_produit()."<br>";
		echo "date de debut : ".$promotion->getdateDebut()."<br>";
		echo "date de fin : ".$promotion->getdateFin()."<br>";
		echo "pourcentage:" .$promotion->getpourcentage()."<br>";
	} */
	

	public function ajouterpromotion($promotion,$produit)
	{

		$sql="INSERT into promotion (reference,pr,dateDebut,dateFin,pourcentage) values (:reference, :pr,:dateDebut,:dateFin,:pourcentage)";
        $db = getConnexion();
        try{
        $req=$db->prepare($sql);
        $reference=$promotion->getidref();
        $pr=$promotion->getpr();
        $dateDebut=$promotion->getdatedeb();
        $dateFin=$promotion->getdatef();
        $pourcentage=$promotion->getpourc();
        $req->bindValue(':reference',$reference);
        $req->bindValue(':pr',$pr);
        $req->bindValue(':dateDebut',$dateDebut);
        $req->bindValue(':dateFin',$dateFin);
        $req->bindValue(':pourcentage',$pourcentage) ;
            $req->execute();
              
     


           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }}
		
	

		

public function getpromById($reference) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM promotion WHERE reference = :reference'
                );
                $query->execute([
                    'reference' => $reference
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }


function trierpromotion(){
            
            $sql="SELECT * FROM promotion order by dateDebut";
            $db =getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
        } 


        function trierpromotiondesc(){
            
            $sql="SELECT * FROM promotion order by dateDebut desc";
            $db = getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }   
        }
   

public function rechercherpromotion($nomh) {
            try { 
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM promotion  WHERE reference like ("%":st"%")'
                );
                $query->execute(['st' => $nomh]);
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

	public function afficherpromotion()
    {
        try {
        $pdo = getConnexion();
        $query = $pdo->prepare('SELECT * FROM promotion ORDER BY `dateDebut` ASC ');
        $query->execute();
        return $query->fetchAll();
    } catch (PDOException $e) {
        $e->getMessage();
    }
    }

	public function tripromotion(){
		$sql="SELECT * from promotion ORDER by dateDebut";
		$db = getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	public function supprimerpromotion($reference){
		$sql="DELETE FROM promotion where reference= :reference";
		$db = getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':reference',$reference);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	  public function modifier($promotion, $reference) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE promotion SET pr = :pr, dateDebut = :dateDebut, dateFin = :dateFin , pourcentage=:pourcentage WHERE reference= :reference'
                );
                $query->execute([
                    'pr' => $promotion->getpr(),
                    'dateDebut' => $promotion->getdatedeb(),
                    'dateFin' => $promotion->getdatef(),
                    'pourcentage' => $promotion->getpourc(),
                    'reference'=>$reference
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

	public function recupererpromotion($reference)
	{
		$sql="SELECT * from promotion where reference=$reference";
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