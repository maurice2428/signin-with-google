<?php
require_once("google-api/vendor/autoload.php");
$gClient = new Google_Client();
$gClient->setClientId("Enter Client Id Here");
$gClient->setClientSecret("Enter Secret Key Here");
$gClient->setApplicationName("Enter Application Name");
$gClient->setRedirectUri("http://localhost/google-signin/controller.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");


$login_url = $gClient->createAuthUrl();


?>