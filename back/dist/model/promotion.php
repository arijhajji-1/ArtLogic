<?PHP

class promotion 
{


	
	private    $reference=null ;
        private    $pr=null  ;
        private $dateDebut=null;
        private  $dateFin=null;
       private    $pourcentage=null ;

	 function __construct($pr, $dateDebut,$dateFin,$pourcentage)
				{
			$this->pr=$pr; 
			$this->dateDebut=$dateDebut; 

		$this->dateFin=$dateFin;
		$this->pourcentage=$pourcentage;
		
				}
	public function getidref()
	{
		return $this->reference;
	}
	public function getdatedeb()
	{
		return $this->dateDebut;
	}
	public function getpr()
	{
		return $this->pr;
	}
	public function getdatef(){
		return $this->dateFin;
	}
	public function getpourc(){
		return $this->pourcentage;
	}
	

public function setidref($reference)
	{
		return $this->$reference;
	}
	public function setdatedeb($dateDebut)
	{
		return $this->$dateDebut;
	}
	public function setidpr($pr)
	{
		return $this->$pr;
	}
	public function setdatef($dateFin){
		return $this->$dateFin;
	}
	public function setpourc($pourcentage){
		return $this->$pourcentage;
	}
	

}

?>