<?PHP

class livreur 
{


	
	private  $IDlivreur;
	private   $Matricule;
	private  $NOMlivreur;
	private  $NUM; 
    private  $ZONE;

	function __construct($IDlivreur, $Matricule,$NOMlivreur,$NUM,$ZONE)
				{
			$this->IDlivreur=$IDlivreur; 
			
			$this->Matricule=$Matricule; 

		$this->NOMlivreur=$NOMlivreur;
		$this->NUM=$NUM;
		$this->ZONE=$ZONE;
				}
	function getIDlivreur()
	{
		return $this->IDlivreur;
	}

	function getMatricule()
	{
		return $this->Matricule;
	}
	function getNOMlivreur(){
		return $this->NOMlivreur;
	}
	function getNUM(){
		return $this->NUM;
	}
	function getZONE(){
		return $this->ZONE;
	}
	


function setIDlivreur()
	{
		return $this->IDlivreur;
	}
	function setMatricule()
	{
		return $this->Matricule;
	}
	function setNOMlivreur(){
		return $this->NOMlivreur;
	}
	function setNUM(){
		return $this->NUM;
	}
	function setZONE(){
		return $this->ZONE;
	}

}

?>