<?php
require_once('Trip.php');
require_once('Economy.php');
require_once('Business.php');
require_once('TripFromBandung.php');
require_once('TripFromJakarta.php');

function client(Trip $trip)
{
  echo $trip->showFeature() . "<br/>";
}

$economyToJakarta = new Economy('Jakarta', 'Snacks and Coffe', 20000);
$bandungJakartaEconomy = new TripFromBandung($economyToJakarta);
client($bandungJakartaEconomy);

$businessToJakarta = new Business('Jakarta', 'Lunch, Free Drinks and Exclusive TV', 60000);
$bandungJakartaBusiness = new TripFromBandung($businessToJakarta);
client($bandungJakartaBusiness);

$economyToBali = new Economy('Bali', 'Snacks and Dinner with No Entertainment', 50000);
$jakartaBaliEconomy = new TripFromJakarta($economyToBali);
client($jakartaBaliEconomy);

$businessToBali = new Business('Bali', 'Shower, Lunch and Dinner, Exclusive TV ', 150000);
$jakartaBaliBusiness = new TripFromJakarta($businessToBali);
client($jakartaBaliBusiness);
