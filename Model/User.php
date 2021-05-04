<?php
class User
{
    private ?int $Id= null;
    private string $Nom;
    private string $Prenom;
    private string $Email;
    private string $Pseudo;
    private string $Mot_de_passe;
    private string $Sexe;
    private string $Date_de_naissance;
    private string $Adresse;
    private string $Date_de_creation;
    private string $Role;
    private ?int $Matricule_fiscale;
    private ?int $Telephone;
    private string $Type_produit;
    private string $key;
    public function __construct($Nom,$Prenom,$Email,$Pseudo,$Role,$Mot_de_passe,$Sexe,$Date_de_naissance,$Adresse,$Matricule_fiscale,$Type_produit,$Telephone,$key)
    {
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->Email = $Email;
        $this->Pseudo = $Pseudo;
        $this->Mot_de_passe = $Mot_de_passe;
        $this->Sexe = $Sexe;
        $this->Date_de_naissance = $Date_de_naissance;
        $this->Adresse = $Adresse;
        $this->Role = $Role;
        $this->Matricule_fiscale = $Matricule_fiscale;
        $this->Telephone = $Telephone;
        $this->Type_produit = $Type_produit;
        $this->key = $key;

    }
    public function getId () {
        return $this->Id;
    }
    public function getkey () {
        return $this->key;
    }
    public function getNom () {
        return $this->Nom;
    }
    public function getPrenom () {
        return $this->Prenom;
    }
    public function getEmail () {
        return $this->Email;
    }
    public function getPseudo () {
        return $this->Pseudo;
    }
    public function getMot_de_passe() {
        return $this->Mot_de_passe;
    }
    public function getSexe () {
        return $this->Sexe;
    }
    public function getDate_de_naissance () {
        return $this->Date_de_naissance;
    }
    public function getAdresse () {
        return $this->Adresse;
    }
    public function getDate_de_creation () {
        return $this->Date_de_creation;
    }
    public function getRole () {
        return $this->Role;
    }
    public function getMatricule_fiscale () {
        return $this->Matricule_fiscale;
    }
    public function getTelephone () {
        return $this->Telephone;
    }
    public function getType_produit () {
        return $this->Type_produit;
    }
    public function setNom ($Nom){
        $this->Nom = $Nom;
    }
    public function setPrenom ($Prenom){
        $this->Prenom = $Prenom;
    }
    public function setEmail ($Email){
        $this->Email = $Email;
    }
    public function setPseudo ($Pseudo){
        $this->Pseudo = $Pseudo;
    }
    public function setMot_de_passe ($Mot_de_passe){
        $this->Mot_de_passe = $Mot_de_passe;
    }
   public function setSexe ($Sexe){
        $this->Sexe = $Sexe;
    }
    public function setDate_de_naissance ($Date_de_naissance){
        $this->Date_de_naissance = $Date_de_naissance;
    }
    public function setAdresse ($Adresse){
        $this->Adresse = $Adresse;
    }
    public function setDate_de_creation ($Date_de_creation){
        $this->Date_de_creation = $Date_de_creation;
    }
    public function setRole ($Role){
        $this->Role = $Role;
    }
    public function setMatricule_fiscale ($Matricule_fiscale){
        $this->Matricule_fiscale = $Matricule_fiscale;
    }
    public function setTelephone ($Telephone){
        $this->Telephone = $Telephone;
    }
    public function setType_produit ($Type_produit){
        $this->Type_produit = $Type_produit;
    }
}
?>