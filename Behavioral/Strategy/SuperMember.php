<?php
require_once('InterfaceMembership.php');

class SuperMember implements Membership
{
  public function doDiscount($price): int
  {
    return $price - ($price * 0.4);
  }
}
