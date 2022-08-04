<?php
require_once('Command.php');
require_once('TripClass.php');

$command = new Command();

$trip = new TripClass();
$trip->setSchedule("19:00-20:00");
$trip->setSeats("B4");
$trip->setPerson(1);
$trip->setPaymentMethod("OVO");
$command->makeBackup($trip);
echo $trip->getSchedule() . "</br>";
echo $trip->getSeats() . "</br>";
echo $trip->getPerson() . "</br>";
echo $trip->getPaymentMethod() . "</br></br>";

$trip->setSchedule("07:00-08:00");
echo $trip->getSchedule() . "</br>";
$command->undo();
echo $trip->getSchedule() . "</br>";
