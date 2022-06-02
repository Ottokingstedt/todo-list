<?php
 
//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';
 
//Make object of Google API Client for call Google API
$google_client = new Google_Client();
 
//Set the OAuth 2.0 Client ID
$google_client->setClientId('859406737269-rv361iccov7hao4m61c1f2p295ous7gn.apps.googleusercontent.com');
 
//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');
 
//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost:8888/todo-list/google-login.php');
 
//
$google_client->addScope('email');
 
// $google_client->addScope('profile');
 
//start session on web page
session_start();
