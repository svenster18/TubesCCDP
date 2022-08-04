<?php

abstract class Trip
{
  private $from, $destination;
  protected $price, $time;

  public function __construct($from, $destination)
  {
    $this->from = $from;
    $this->destination = $destination;
  }

  function brief(): string
  {
    return "This trip is from " . $this->from . " to " . $this->destination;
  }

  abstract function setTrip($price, $time): void;

  abstract function showOther(): void;

  function advantage(): void
  {
  }
}
