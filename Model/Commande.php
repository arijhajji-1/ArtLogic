<?php


class commande
{ private $id_commande;
    private $id_utilisateur;
    private $prix_total;
    private $mode_de_payement;
    private $description_commande;
    private $produits;
    function __construct($id_utilisateur,$produits,$prix_total,$mode_de_payement,$description_commande)
    {
        $this->id_utilisateur=$id_utilisateur;
        $this->prix_total=$prix_total;
        $this->mode_de_payement=$mode_de_payement;
        $this->description_commande=$description_commande;
        $this->produits=$produits;
    }

    function set_id_commande($id_commande)
    { $this->id_commande=$id_commande; }

    function set_id_utilisateur($id_utilisateur)
    { $this->id_utilisateur=$id_utilisateur; }

    function set_prix_total($prix_total)
    { $this->prix_total=$prix_total; }

    function set_mode_de_payement($mode_de_payement)
    { $this->mode_de_payement=$mode_de_payement; }

    function get_id_commande()
    { return $this->id_commande; }

    function get_id_utilisateur()
    { return $this->id_utilisateur; }

    function get_prix_total()
    { return $this->prix_total; }

    function get_mode_de_payement()
    { return $this->mode_de_payement; }

    public function getDescriptionCommande()
    {
        return $this->description_commande;
    }
    public function setDescriptionCommande($description_commande)
    {
        $this->description_commande = $description_commande;
    }

    public function getProduits()
    {
        return $this->produits;
    }

    public function setProduits($produits)
    {
        $this->produits = $produits;
    }


}
?>