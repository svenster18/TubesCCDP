<?php

class Tiket
{
  private $destination;
  private $from;
  private $price;
  private $date;
  private $seat;
  private $cost = 0;


  public function __construct($destination, $from, $price)
  {
    $this->destination = $destination;
    $this->from = $from;
    $this->price = $price;
  }

  public function setOrder($seat, $date)
  {
    $this->seat = $seat;
    $this->date = $date;
    $this->cost = $this->price * $this->seat;
  }

  public function printBase()
  {
    echo "--------------------------------------<br />";
    echo "Destination : " . $this->destination . "<br />";
    echo "From : " . $this->from . "<br />";
    echo "Price : Rp. " . $this->price . "<br />";
  }

  public function printBooked()
  {
    if ($this->seat) {
      echo "Destination : " . $this->destination . "<br />";
      echo "From : " . $this->from . "<br />";
      echo "Date : " . $this->date . "<br />";
      echo "Seat : " . $this->seat . "<br />";
      echo "Cost : Rp. " . $this->cost . "<br /><br />";
    }
  }

  public function __clone()
  {
  }
}
