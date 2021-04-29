<?php
class panier
{
    private $id_client;
    private $id_produit;
    private $quantite;
    private $prix_total;

    function __construct($id_client,$id_produit,$quantite,$prix_total)
    {
        $this->id_client=$id_client;
        $this->id_produit=$id_produit;
        $this->quantite=$quantite;
        $this->prix_total=$prix_total;
    }

    function set_id_client($id_client)
    { $this->id_client=$id_client; }

    function set_id_produit($id_produit)
    { $this->id_produit=$id_produit; }

    function set_quantite($quantite)
    { $this->quantite=$quantite; }

    function set_prix_total($prix_total)
    { $this->prix_total=$prix_total; }

    function get_id_client()
    { return $this->id_client; }

    function get_id_produit()
    { return $this->id_produit; }

    function get_quantite()
    { return $this->quantite; }

    function get_prix_total()
    { return $this->prix_total; }



}

?>