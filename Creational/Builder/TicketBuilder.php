<?php 

    require_once('Builder.php');
    require_once('Ticket.php');

    class TicketBuilder implements Builder {
        private $ticket;

        public function reset() {
            $this->ticket = new Ticket();
        }
        public function setSchedule($schedule) {
            $this->ticket->setSchedule($schedule);
        }
        public function setSeats($seats) {
            $this->ticket->setSeats($seats);
        }
        public function setPerson($person){
            $this->ticket->setPerson($person);
        }
        public function setPaymentMethod($paymentMethod){
            $this->ticket->setPaymentMethod($paymentMethod);
        }
        public function print(): Ticket {
            return $this->ticket;
        }
    }
?>