<?php

require_once('Trip.php');

class TripFromJakarta extends Trip
{
  public function showFeature(): string
  {
    return "Trip From Jakarta " . $this->trip->getFeature();
  }
}
