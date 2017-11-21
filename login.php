<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
// Include FB config file && User class
require_once 'configFb.php';
require_once 'user.php';

if(isset($accessToken)){
    if(isset($_SESSION['facebook_access_token'])){
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    }else{
        // Put short-lived access token in session
        $_SESSION['facebook_access_token'] = (string) $accessToken;

          // OAuth 2.0 client handler helps to manage access tokens
        $oAuth2Client = $fb->getOAuth2Client();

        // Exchanges a short-lived access token for a long-lived one
        $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
        $_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;

        // Set default access token to be used in script
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    }

    // Redirect the user back to the same page if url has "code" parameter in query string
    if(isset($_GET['code'])){
        header('Location: ./');
    }

    // Getting user facebook profile info
    try {
        $profileRequest = $fb->get('/me?fields=name,first_name,last_name,email,link,gender,locale,picture');
        $fbUserProfile = $profileRequest->getGraphNode()->asArray();
    } catch(FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        session_destroy();
        // Redirect user back to app login page
        header("Location: ./");
        exit;
    } catch(FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }

    // Initialize User class
    $user = new User();

    // Insert or update user data to the database
    $fbUserData = array(
        'oauth_provider'=> 'facebook',
        'oauth_uid'     => $fbUserProfile['id'],
        'first_name'    => $fbUserProfile['first_name'],
        'last_name'     => $fbUserProfile['last_name'],
        'email'         => $fbUserProfile['email'],
        'gender'        => $fbUserProfile['gender'],
        'locale'        => $fbUserProfile['locale'],
        'picture'       => $fbUserProfile['picture']['url'],
        'link'          => $fbUserProfile['link']
    );
    $userData = $user->checkUser($fbUserData);

    // Put user data into session
    $_SESSION['userData'] = $userData;

    // Get logout url
    $logoutURL = $helper->getLogoutUrl($accessToken, $redirectURL.'logout.php');

    // Render facebook profile data
    if(!empty($userData)){
        $output  = '<h1>Facebook Profile Details </h1>';
        $output .= '<img src="'.$userData['picture'].'">';
        $output .= '<br/>Facebook ID : ' . $userData['oauth_uid'];
        $output .= '<br/>Name : ' . $userData['first_name'].' '.$userData['last_name'];
        $output .= '<br/>Email : ' . $userData['email'];
        $output .= '<br/>Gender : ' . $userData['gender'];
        $output .= '<br/>Locale : ' . $userData['locale'];
        $output .= '<br/>Logged in with : Facebook';
        $output .= '<br/><a href="'.$userData['link'].'" target="_blank">Click to Visit Facebook Page</a>';
        $output .= '<br/>Logout from <a href="'.$logoutURL.'">Facebook</a>';
    }else{
        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
    }

}else{
    // Get login url
    $loginURL = $helper->getLoginUrl($redirectURL, $fbPermissions);

    // Render facebook login button


    $output = '<a href="'.htmlspecialchars($loginURL).'" class="btn btn-primary btn-block" role="button" aria-pressed="true">Facebook</a>';
}
?>

<!DOCTYPE html>
<html>

<head>
<title>Gaming Login Form Responsive Widget Template  :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gaming Login Form Widget Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/login-style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
	<div class="padding-all">
		<div class="header">
			<h1><img src="./images/5.png" alt=" "> Gaming Login Form</h1>
		</div>

		<div class="design-w3l">
			<div class="mail-form-agile">
				<form action="index.php" method="post">
					<?php echo $output; ?>
					<input type="submit" value="Facebook" style="background-color:#3F51B5; width:200px;"><br><br>
					<input type="submit" value="Google" style="background-color:#D50000; width:200px;">
				</form>
			</div>
		  <div class="clear"> </div>
		</div>

		<div class="footer">
		<p>© 2017 Gaming Login form. All Rights Reserved | Design by  <a href="https://w3layouts.com/" >  w3layouts </a></p>
		</div>
	</div>
</body>
</html>
