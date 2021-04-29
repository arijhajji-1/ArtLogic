<?php
require_once '../Controller/UserC.php';
require_once '../Model/User.php';
$UserC =  new UserC();
    $Users = $UserC->afficherClient();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Atelier 8</title>

</head>

<body>
<section class="container">
    <h2>MUSIC</h2>
    <a href = "addAlbum.php" class="btn btn-primary shop-item-button" href = "#">Ajouter</a>
    <div class="shop-items">
        <?php
        foreach ($Users as $User) {
            ?>
            <div class="shop-item">
                <strong class="shop-item-title"> <?= $User['nom_user'] ?> </strong>
                <div class="shop-item">
                    <strong class="shop-item-title"><?= $User['prenom_user'] ?> </strong>
                </div>
                <div class="shop-item">
                    <strong class="shop-item-title"><?= $User['pseudo_user'] ?> </strong>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</section>



</body>

</html>

