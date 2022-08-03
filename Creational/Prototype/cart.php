<?php

class Cart
{
  private $cart = array();

  public function pushOrder($order)
  {
    array_push($this->cart, $order);
  }

  public function printCart()
  {
    foreach ($this->cart as $c) {
      $c->printBooked();
    }
  }

  public function getCart()
  {
    return $this->cart;
  }
}
