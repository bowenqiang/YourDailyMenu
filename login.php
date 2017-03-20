<?php
session_start();

include('config/googleLogin.php');

//Display user info or display login url as per the info we have.
echo '<div style="margin:20px">';
if (isset($authUrl)){ 
	//show login url
	echo '<div align="center">';
	echo '<h3>Login with Google</h3>';
	echo '<div>Please click login button to connect to Google.</div>';
	echo '<a class="login" href="' . $authUrl . '"><img src="images/google-login-button.png" /></a>';
	echo '</div>';
	
} else {
		$user = $service->userinfo->get(); //get user info 
	    $_SESSION['firstName'] = $user->givenName;
	    $_SESSION['lastName'] = $user->familyName;
	    $_SESSION['userID'] = $user->id;
	    $_SESSION['imgURL'] = $user->picture;
	    $_SESSION['email'] = $user->email;
	    header("Location: index.php");
	
	/*	
	//show user picture
	echo '<img src="'.$user->picture.'" style="float: right;margin-top: 33px;" />';
	//print user details
	echo '<pre>';
	print_r($user);
	echo '</pre>';
	*/
		//Add mysql stuffs below

}
echo '</div>';


?>