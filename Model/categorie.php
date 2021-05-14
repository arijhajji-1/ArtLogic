<?php
class categorie
{
    private ?int $Id_categorie = null;
    private string $NomC;
    private string $DescriptionC;
   
   
    public function __construct($NomC,$DescriptionC)
    {  
      
        $this->NomC = $NomC;
        $this->DescriptionC = $DescriptionC; 
    }
    public function getId_categorie () {
        return $this->Id_categorie;
    }
    public function getNomC () {
        return $this->NomC;
    }
    public function getDescriptionC () {
        return $this->DescriptionC;
    }
   
    public function setID_categorie ($Id_categorie){
        $this->Id_categorie = $Id_categorie;
    }
    
    public function setNomC ($NomC){
        $this->NomC = $NomC;
    }
    public function setDescriptionC ($DescriptionC){
        $this->DescriptionC = $DescriptionC;
    }
   
}
?>