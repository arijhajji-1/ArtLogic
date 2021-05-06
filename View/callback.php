<?php
require_once('../View/settings.php');

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

}
else
{
    header('Location:index.html');
}

if(!isset($token["error"])){
    $oAuth= new Google_Service_Oauth2($client);
    $user = $oAuth->userinfo_v2_me->get();

    echo "<pre>";

    $_SESSION['email'] = $user->email;


    #var_dump($user);

    header('Location:AfficheUser.php');
}else{
    header('Location:index.html');
    exit();
}

?>