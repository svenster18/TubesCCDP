<?php

require_once('Trip.php');

class TripBandungJakarta extends Trip
{

  function setTrip($price, $time): void
  {
    $this->price = $price;
    $this->time = $time;
  }

  function showOther(): void
  {
    $trip = $this->brief();

    echo $trip . " with the price of " . $this->price . " and depart at " . $this->time;
  }
}
