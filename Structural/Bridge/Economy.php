<?php

require_once('InterfaceClasses.php');

class Economy implements Classes
{
  private $destination;
  private $feature;
  private $price;

  public function __construct($destination, $feature, $price)
  {
    $this->destination = $destination;
    $this->feature = $feature;
    $this->price = $price;
  }

  public function getFeature(): string
  {
    return "to " . $this->destination . " with Economy Class, you get " . $this->feature . " and Only Cost Rp. " . $this->price;
  }
}
