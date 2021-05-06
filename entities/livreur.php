<?PHP
class livreur{
	private  $IDlivreur=NULL;
	private $Nomlivreur=NULL;
	private $Matricule=NULL;
	private $Zone=NULL;
	private $Numlivreur=NULL;
	function __construct($Nomlivreur,$Matricule,$Zone,$Numlivreur){
		

		$this->Nomlivreur =$Nomlivreur;
		$this->Matricule =$Matricule;
		$this->Zone =$Zone;
		$this->Numlivreur=$Numlivreur;
	}
	function getIDlivreur(){
		return $this->IDlivreur;
	}
	
	function getNomlivreur(){
		return $this->Nomlivreur;
	}
	function getMatricule(){
		return $this->Matricule;
	}
	function getZone(){
		return $this->Zone;
	}
	function getNumlivreur(){
		return $this->Numlivreur;
	}
	function setIDlivreur  ($IDlivreur){
		$this->IDlivreur  =$IDlivreur;
	}
	function setNomlivreur  ($Nomlivreur){
		$this->Nomlivreur  =$Nomlivreur;
	}
	function setMatricule  ($Matricule){
		$this->Matricule  ;
	}
	function setZone  ($Zone){
		$this->Zone  =$Zone;
	}
	function setNumlivreur($Numlivreur){
		$this->Numlivreur=$Numlivreur;
	}
	
}

?>