<?php
//require_once '../src/autoload.php';

if(isset($_POST['submit'])) {
    $SecretKey = '6LfH5MYaAAAAAAjsaVxuXQK4GxM_2vUHTMhrkH04';
    $reponseKey = $_POST['g-recaptcha-response'];
    $serverIP = $_SERVER['REMOTE_ADDR'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$SecretKey&reponse=$reponseKey&remotip=$serverIP";
    $reponse = file_get_contents($url);
    if ($reponseKey == true) {
        echo "yes";
    }
    else
    {
        echo "no";
    }
}
?>
<html>
<head>
    <title>reCAPTCHA demo: Simple page</title>
</head>
<body>
<form  method="POST">
    <div  class="g-recaptcha" data-sitekey="6LfH5MYaAAAAAORmnuU0u-zLxZGW0npcAS_HnGzJ"></div>
    <br/>
    <input type="submit" name="submit" value="Submit">
</form>
<script src='https://www.google.com/recaptcha/api.js' async defer></script>
</body>
</html>
