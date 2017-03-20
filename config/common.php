<?php 
session_start();
if(isset($_SESSION['access_token'])) {
	    $fname = $_SESSION['firstName'];
	    $lname = $_SESSION['lastName'] ;
	    $userId = $_SESSION['userID'];
	    $userImage = $_SESSION['imgURL'] ;
	    $userEmail = $_SESSION['email'];
	}
?>