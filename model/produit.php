<?php
class produit
{
    private ?int $Id_produit = null;
    private string $DateA;
    private string $Description1;
    private string $Genre;
    private string $Couleur;
    private string $Taille;
    private float $poids;
    private float $Prix;
    private int $Quantite; 
    private string $image;
   
    public function __construct($DateA,$Description1,$Genre,$Couleur,$Taille,$poids,$Prix,$Quantite,$image)
    {  
      //  $this->Id_produit = $Id_produit;
        $this->DateA = $DateA;
        $this->Description1 = $Description1;
        $this->Genre = $Genre;
        $this->Couleur = $Couleur;
        $this->Taille = $Taille;
        $this->poids = $poids;
        $this->Prix = $Prix;
        $this->Quantite = $Quantite; 
        $this->image = $image;
       
    }
    public function getId_produit () {
        return $this->Id_produit;
    }
    public function getDateA () {
        return $this->DateA;
    }
    public function getDescription1 () {
        return $this->Description1;
    }
    public function getGenre () {
        return $this->Genre;
    }
    public function getCouleur () {
        return $this->Couleur;
    }
    public function getTaille() {
        return $this->Taille;
    }
    public function getpoids () {
        return $this->poids;
    }
    public function getPrix () {
        return $this->Prix;
    }
    public function getQuantite () {
        return $this->Quantite;
    } 
    public function getimage () {
        return $this->image;
    }

    public function setID_produit ($Id_produit){
        $this->Id_produit = $Id_produit;
    }
    
    public function setDateA ($DateA){
        $this->DateA = $DateA;
    }
    public function setDescription1 ($Description1){
        $this->Description1 = $Description1;
    }
    public function setGenre ($Genre){
        $this->Genre = $Genre;
    }
    public function setCouleur ($Couleur){
        $this->Couleur = $Couleur;
    }
    public function setTaille ($Taille){
        $this->Taille = $Taille;
    }
   public function setpoids ($poids){
        $this->poids = $poids;
    }
    public function setPrix ($Prix){
        $this->Prix = $Prix;
    }
    public function setQuantite ($Quantite){
        $this->Quantite = $Quantite;
    } 
    public function setimage ($image){
        $this->image = $image;
    }
    
}
?>