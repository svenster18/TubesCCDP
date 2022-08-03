<?php

require_once('InterfaceClasses.php');

class Business implements Classes
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
    return "to " . $this->destination . " with Business Class, you get " . $this->feature . " but Cost Rp. " . $this->price;
  }
}
