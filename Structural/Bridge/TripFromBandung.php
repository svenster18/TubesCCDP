<?php

require_once('Trip.php');

class TripFromBandung extends Trip
{
  public function showFeature(): string
  {
    return "Trip From Bandung " . $this->trip->getFeature();
  }
}
