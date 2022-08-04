<?php
require_once('InterfaceMembership.php');

class NonMember implements Membership
{
  public function doDiscount($price): int
  {
    return $price;
  }
}
