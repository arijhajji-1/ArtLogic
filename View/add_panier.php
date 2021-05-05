<?PHP
include "../Model/panier.php";
include "../Core/panierC.php";
include "../Core/ProduitC.php";
if ( isset($_GET['id_produit']) and isset($_GET['prix_total']))
{
    $quantite=1;
    $id_client='1234';
    $p1=new panier($id_client,$_GET['id_produit'],$quantite,$_GET['prix_total']);

    $panier1C=new panierC();
    $checkifexist= $panier1C->recupererPanier('1234',$_GET['id_produit']);

    if($checkifexist==false){
        $panier1C->ajouterPanier($p1);

    }else{
        echo "<h2>lalala</h2>";
        $prd= (new ProduitC())->recupererProduit($_GET['id_produit']);
        $panier1C->modifierPanier($p1,$checkifexist,$prd['prix']);
    }
 echo '<script>
alert("ajouté au panier");
location.href="panier.php";
</script>';
}
else
{
    echo "vérifier les champs";
}


?>