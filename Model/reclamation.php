<?PHP

class reclamation 
{


	private  $id_reclamation=1;
	private $id_client=null;
	private  $date_reclamation=null;
	private   $description_reclamation=null;
	private  $type_reclamation=null;
	private  $etat=null; 

	function __construct($id_client,$description_reclamation,$type_reclamation)
				{
			
		$this->id_client=$id_client;

		$this->description_reclamation=$description_reclamation;
		$this->type_reclamation=$type_reclamation;
		
		
				}
	public function getidrec()
	{
		return $this->id_reclamation;
	}
	public function getidcl()
	{
		return $this->id_client;
	}
	
	public function getdate(){
		return $this->date_reclamation;
	}
	public function getdescription(){
		return $this->description_reclamation;
	}
	public function gettype(){
		return $this->type_reclamation;
	}
	
	public function getetat()
	{
		return $this->etat;
	}


function setidrec($id_reclamation)
	{
		return $this->id_reclamation;
	}
	function setidcl()
	{
		return $this->id_client;
	}
	
	function setdate(){
		return $this->date_reclamation;
	}
	function setdescription(){
		return $this->description_reclamation;
	}
	function settype(){
		return $this->type_reclamation;
	}
	
	function setetat()
	{
		return $this->etat;
	}

}

?>