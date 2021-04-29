<?php


class produit
{
    private ?int $id_produit= null;
    private string $description;
    private float $prix;
    private ?int $quantite;
    private string $image;
    public function __construct($description,$prix,$quantite,$image)
    {
        $this->id_produit = $description;
        $this->prix = $prix;
        $this->quantite = $quantite;
        $this->image = $image;
    }
    public function getId_produit () {
        return $this->id_produit;
    }
    public function getdescription () {
        return $this->description;
    }
    public function getprix () {
        return $this->prix;
    }
    public function getquantite () {
        return $this->quantite;
    }
    public function getimage () {
        return $this->image;
    }
}
?>