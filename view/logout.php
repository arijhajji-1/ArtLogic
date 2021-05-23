<?php

session_start();
unset($_SESSION["email"]);
unset($_SESSION["mot_de_passe"]);
unset($_SESSION["id_user"]);
unset($_SESSION["pseudo_user"]);
unset($_SESSION["image"]);
unset($_SESSION["role"]);
session_destroy();
header("Location:index.php");

?>
