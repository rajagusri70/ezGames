<?php
if(!isset($_SESSION))
    {
        session_start();
    }

//Include Google client library
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '219859760657-gjncl9e3ul0j4spcu989fn4gmu8bgbte.apps.googleusercontent.com';
$clientSecret = 'XXCcaTlpombCnqOAR0L1071H';
$redirectURL = 'http://localhost/ezGames/';

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>
