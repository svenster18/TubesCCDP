<?php

require_once("TripBandungJakarta.php");
require_once("TripBandungSurabaya.php");

$bdgJkt = new TripBandungJakarta("Bandung", "Jakarta");
$bdgJkt->setTrip("Rp. 200000", "15:00");
$bdgJkt->showOther();
echo "<br/>";
echo "<br/>";
$bdgSby = new TripBandungSurabaya("Bandung", "Surabaya");
$bdgSby->setTrip("Rp. 500000", "11:00");
$bdgSby->showOther();
$bdgSby->advantage();
