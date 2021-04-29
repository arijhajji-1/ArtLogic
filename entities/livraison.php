<?PHP
class livraison{
	private $IDlivraison;
	private $IDproduit;
	private $Nomcat;
	private $IDclient;
	private $NUMclient;
	function __construct($IDlivraison,$IDproduit,$Nomcat,$IDclient,$NUMclient){
		$this->IDlivraison=$IDlivraison;
		$this->IDproduit=$IDproduit;
		$this->Nomcat=$Nomcat;
		$this->IDclient=$IDclient;
		$this->NUMclient=$NUMclient;
	}
	
	function getIDlivraison(){
		return $this->IDlivraison;
	}
	function getIDproduit(){
		return $this->IDproduit;
	}
	function getNomcat(){
		return $this->Nomcat;
	}
	function getIDclient(){
		return $this->IDclient;
	}
	function getNUMclient(){
		return $this->NUMclient;
	}

	function setIDproduit($IDproduit){
		$this->IDproduit=$IDproduit;
	}
	function setNomcat($Nomcat){
		$this->Nomcat;
	}
	function setIDclient($IDclient){
		$this->IDclient=$IDclient;
	}
	function setNUMclient($NUMclient){
		$this->NUMclient=$NUMclient;
	}
	
}

?>