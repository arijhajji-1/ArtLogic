<?PHP
include "../Model/panier.php";
include "../Controller/panierC.php";
include "../Controller/ProduitC.php";
session_start();

if ( isset($_GET['Id_produit']) and isset($_GET['prix_total']))
{
    $Quantite=1;
    $id_user=$_SESSION['id_user'];
    $p1=new panier($_SESSION['id_user'],$_GET['Id_produit'],$Quantite,$_GET['prix_total']);

    $panier1C=new panierC();
    $checkifexist= $panier1C->recupererPanier($_SESSION['id_user'],$_GET['Id_produit']);

if (($id_user!=0)  and  ($checkifexist==false))
{
     
    
        $panier1C->ajouterPanier($p1);
        echo '<script>
alert("ajouté au panier");
location.href="afficherproduitfront.php";
</script>';

    }else if  (($id_user!=0)  and  ($checkifexist==true))
    {
        echo '<script>
alert("déja saisie au panier");
location.href="afficherproduitfront.php";
</script>';}
else {
    echo '<script>
    alert("connecté svp");
    location.href="afficherproduitfront.php";
    </script>';}
}
        
    
 

 


?>