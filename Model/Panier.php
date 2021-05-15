<?php
class panier
{
    private $id_user;
    private $Id_produit;
    private $Quantite;
    private $prix_total;

    function __construct($id_user,$Id_produit,$Quantite,$prix_total)
    {
        $this->id_user=$id_user;
        $this->Id_produit=$Id_produit;
        $this->Quantite=$Quantite;
        $this->prix_total=$prix_total;
    }

    function set_id_user($id_user)
    { $this->id_user=$id_user; }

    function set_Id_produit($Id_produit)
    { $this->Id_produit=$Id_produit; }

    function set_Quantite($Quantite)
    { $this->Quantite=$Quantite; }

    function set_prix_total($prix_total)
    { $this->prix_total=$prix_total; }

    function get_id_user()
    { return $this->id_user; }

    function get_Id_produit()
    { return $this->Id_produit; }

    function get_Quantite()
    { return $this->Quantite; }

    function get_prix_total()
    { return $this->prix_total; }



}

?>