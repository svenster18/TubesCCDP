<?php

require_once('tiket.php');
require_once('cart.php');

$cart = new Cart();
$tiket1 = new Tiket("Bandung", "Jakarta", 20000);
$tiket2 = new Tiket("Bandung", "Surabaya", 40000);
$tiket3 = new Tiket("Bandung", "Solo", 30000);

echo "List Tiket <br />";
$tiket1->printBase();
$tiket2->printBase();
$tiket3->printBase();
echo "--------------------------------------  <br /> <br />";

echo "Memesan tiket Bandung - Jakarta sebanyak 2 seat <br /><br />";
$order = clone $tiket1;
$order->setOrder(2, '20/4/2022');
$cart->pushOrder($order);

echo "Memesan tiket Bandung - Surabaya sebanyak 4 seat <br /><br />";
$order2 = clone $tiket2;
$order2->setOrder(4, '22/4/2022');
$cart->pushOrder($order2);


$cart->printCart();
