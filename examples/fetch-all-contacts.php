<?php
require dirname(__FILE__)."/../vendor/autoload.php";

use SSX\Utilities\CardDAV;

$username   = "username";
$password   = "password";
$url        = "https://carddav.example.com/card.php/addressbooks/'.$username.'/default/";

// Create a new instance
$carddav = new CardDAV($url);

// Set our login details
$carddav->set_auth($username, $password);

// Get all cards
echo $carddav->get();
