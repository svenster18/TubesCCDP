<?php 
    class EditHistory {
        private $trip;
        private $schedule;
        private $seats;
        private $person;
        private $paymentMethod;

        public function __construct($trip, $schedule, $seats, $person, $paymentMethod) {
            $this->trip = $trip;
            $this->schedule = $schedule;
            $this->seats = $seats;
            $this->person = $person;
            $this->paymentMethod = $paymentMethod;
        }

        public function restore() {
            $this->trip->setSchedule($this->schedule);
            $this->trip->setSeats($this->seats);
            $this->trip->setPerson($this->person);
            $this->trip->setPaymentMethod($this->paymentMethod);
        }
    }
?>