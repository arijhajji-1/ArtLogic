<?php
   
     require "../config.php";

$to      = $_POST['to'];
$objet   = $_POST['objet'];
$message = $_POST['area'];

$header='Content-type: text/html; charset=iso-8859-1 From :reclamation.artlogic@gmail.com';

mail($_POST['to'], $_POST['objet'], $_POST['area'],$header);

header('Location: http://localhost/projet/light/page-confirm-mail.html');



?>