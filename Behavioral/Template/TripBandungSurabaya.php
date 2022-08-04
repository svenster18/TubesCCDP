<?php

require_once('Trip.php');

class TripBandungSurabaya extends Trip
{

  function setTrip($price, $time): void
  {
    $this->price = $price;
    $this->time = $time;
  }

  function showOther(): void
  {
    $trip = $this->brief();

    echo $trip . " with the price of " . $this->price . " and depart at " . $this->time . "<br />";
  }

  #Override
  function advantage(): void
  {
    echo "This Trip Have a very wide seat and great music <br />";
  }
}
