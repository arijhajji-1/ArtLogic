<?PHP
include "../Model/panier.php";
include "../Core/panierC.php";
include "../Core/ProduitC.php";
if ( isset($_GET['Id_produit']) and isset($_GET['prix_total']))
{
    $Quantite=1;
    $id_user='id_user';
    $p1=new panier($id_user,$_GET['Id_produit'],$Quantite,$_GET['prix_total']);

    $panier1C=new panierC();
    $checkifexist= $panier1C->recupererPanier('$id_user',$_GET['Id_produit']);

    if($checkifexist==false){
        $panier1C->ajouterPanier($p1);

    }else{
        echo '<script>
alert("déja saisie au panier");
location.href="panier.php";
</script>';
        
    }
 echo '<script>
alert("ajouté au panier");
location.href="panier.php";
</script>';
}

?>