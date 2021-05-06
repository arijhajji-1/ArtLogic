<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>

</head>
<body>
<div class="container">
    <div class="row" id="profile" style="background" >
        <div class="col-md-4 col-md-offset-2 vbottom">
            <img id="pPicture" src="<?=$_SESSION['user']['picture'];?>" class="img-circle">
        </div>
        <div class="col-md-5 vbottom">
            <p><strong><?=$_SESSION['email'];?></strong></p>
        </div>



        <div class="col-md1">
            <a href ="deconnexion.php">Logout</a>
        </div>
    </div>
</div>
</body>
</html>
