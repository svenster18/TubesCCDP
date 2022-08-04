<?php
    require_once('Director.php');
    require_once('TicketBuilder.php');
    require_once('ReceiptBuilder.php');

    $director = new Director();

    $ticketBuilder = new TicketBuilder();
    $director->orderLocal($ticketBuilder);
    $ticket = $ticketBuilder->print();
    echo $ticket->getSchedule()."</br>";
    echo $ticket->getSeats()."</br>";
    echo $ticket->getPerson()."</br>";
    echo $ticket->getPaymentMethod()."</br></br>";

    $receiptBuilder = new ReceiptBuilder();
    $director->orderLocal($receiptBuilder);
    $receipt = $receiptBuilder->print();
    echo $receipt->getSchedule()."</br>";
    echo $receipt->getSeats()."</br>";
    echo $receipt->getPerson()."</br>";
    echo $receipt->getPaymentMethod()."</br></br>";

    $ticketBuilder->reset();
    $ticketBuilder->setSchedule("19:00-20:00");
    $ticketBuilder->setSeats("B4");
    $ticketBuilder->setPerson(1);
    $ticketBuilder->setPaymentMethod("OVO");
    $ticket = $ticketBuilder->print();
    echo $ticket->getSchedule()."</br>";
    echo $ticket->getSeats()."</br>";
    echo $ticket->getPerson()."</br>";
    echo $ticket->getPaymentMethod()."</br></br>";
