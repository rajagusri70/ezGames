<?php
// Include FB config file && User class
require_once 'configFb.php';
include_once 'gpConfig.php';
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

        $output = '<p>Profile User</p>';
        $output  .= '<div class="span span1">';
        $output  .= '<p class="left">NAME</p>';
        $output  .= '<p class="right">: ' . $userData['first_name'].' '.$userData['last_name'].'"</p>';
        $output  .= '<div class="clearfix"></div>';
        $output  .= '</div>';
        $output  .= '<div class="span span2">';
        $output  .= '<p class="left">EMAIL</p>';
        $output .= '<p class="right">: ' . $userData['email'].'"</p>';
        $output  .= '<div class="clearfix"></div>';
        $output  .= '</div>';
        $output .= '<br/><a href="'.$logoutURL.'" class="btn btn-default btn-block" role="button" aria-pressed="true">Logout</a>';
        $x = '<img src="'.$userData['picture'].'" id="avatar" alt="avatar" style="width:30px;height:30px;border-radius:50%"/>&nbsp;&nbsp;'.$userData['first_name'];
    }else{
        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
    }

}else{
    // Get login url
    $loginURL = $helper->getLoginUrl($redirectURL, $fbPermissions);

    // Render facebook login button

		$x= '<img src="images/avatar-1-1.png" id="avatar" alt="avatar" style="width:30px;height:30px;border-radius:50%"/> &nbsp;&nbsp; Login';
    $output = '<p>Silahkan lakukan login</p>';
    $output .= '<a href="'.htmlspecialchars($loginURL).'" class="btn btn-primary btn-block" role="button" aria-pressed="true">Facebook</a>';
}
?>
