<?php
require_once 'configFb.php';
include_once 'gpConfig.php';

// Remove access token from session
unset($_SESSION['facebook_access_token']);

// Remove user data from session
unset($_SESSION['userData']);


//Unset token and user data from session
unset($_SESSION['token']);
unset($_SESSION['userData']);

//Reset OAuth access token
$gClient->revokeToken();

//Destroy entire session
session_destroy();
// Redirect to the homepage
header("Location:index.php");


?>
