<?php

class Member
{
  private $level;

  public function __construct($level)
  {
    $this->level = $level;
  }

  public function execute($price): int
  {
    return $this->level->doDiscount($price);
  }
}
