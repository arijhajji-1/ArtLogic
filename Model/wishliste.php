<?php


class wishliste
{
    private ?int $Id_produit= null;
    private ?int $Id_user;
    private ?int $Id_wishliste;
    public function __construct($Id_user,$Id_produit)
    {
        $this->Id_user = $Id_user;
        $this->Id_produit = $Id_produit;
    }
    public function getId_wishliste ()
      {
        return $this->Id_wishliste;
      }
    public function getId_user ()
    {
      return $this->Id_user;
    }
public function getId_produit ()
   {
    return $this->Id_produit;
   }

}
?>