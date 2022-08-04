<?php
require_once('InterfaceMembership.php');

class PremiumMember implements Membership
{
  public function doDiscount($price): int
  {
    return $price - ($price * 0.2);
  }
}
