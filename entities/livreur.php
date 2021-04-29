<?PHP
class livreur{
	private $cin;
	private $nom;
	private $prenom;
	private $secteur;
	private $mail;
	function __construct($cin,$nom,$prenom,$secteur,$mail){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->secteur=$secteur;
		$this->mail=$mail;
	}
	
	function getCin(){
		return $this->cin;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getSecteur(){
		return $this->secteur;
	}
	function getMail(){
		return $this->mail;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setSecteur($secteur){
		$this->secteur=$secteur;
	}
	function setMail($mail){
		$this->mail=$mail;
	}
	
}

?>