<?php
require_once('../View/vendor/autoload.php');
session_start();
$client =new Google_Client();
$client->setClientID("982613430686-pd25pgb60epo4js2oom9u2gvua0ju68b.apps.googleusercontent.com");
$client->setClientSecret("qrIT-UCumi7oXWxn0ieeuI_W");
$client->setApplicationName("ArtLogic");
$client->setRedirectUri('http://localhost:63342/ArtLogic/View/callback.php');
$client->addScope("https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email");
$login_url =$client->createAuthUrl();
?>