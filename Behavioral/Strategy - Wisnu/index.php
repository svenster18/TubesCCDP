<?php

require_once('NonMember.php');
require_once('PremiumMember.php');
require_once('SuperMember.php');
require_once('Member.php');

$nonMember = new Member(new NonMember());
echo "For non Member, if the price is Rp. 100000 then it will be Rp." . $nonMember->execute(100000) . "<br />";

$premiumMember = new Member(new PremiumMember());
echo "For Premium Member, if the price is Rp. 100000 then it will be Rp." . $premiumMember->execute(100000) . "<br />";

$superMember = new Member(new SuperMember());
echo "For Super Member, if the price is Rp. 100000 then it will be Rp." . $superMember->execute(100000) . "<br />";
