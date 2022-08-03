<?php

require_once('InterfaceClasses.php');

abstract class Trip
{
  protected $trip;

  public function __construct(Classes $trip)
  {
    $this->trip = $trip;
  }

  public function showFeature(): string
  {
    return "There is a trip if you go " . $this->trip->getFeature();
  }
}
