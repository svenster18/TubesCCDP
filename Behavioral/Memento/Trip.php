<?php 

    require_once('EditHistory.php');

    class Trip {
        private $schedule;
        private $seats;
        private $person;
        private $paymentMethod;

        public function setSchedule($schedule){
            $this->schedule = $schedule;
        }

        public function getSchedule(){
            return $this->schedule;
        }

        public function setSeats($seats){
            $this->seats = $seats;
        }

        public function getSeats(){
            return $this->seats;
        }

        public function setPerson($person){
            $this->person = $person;
        }

        public function getPerson(){
            return $this->person;
        }

        public function setPaymentMethod($paymentMethod){
            $this->paymentMethod = $paymentMethod;
        }

        public function getPaymentMethod(){
            return $this->paymentMethod;
        }

        public function recordEditHistory(): EditHistory {
            return new EditHistory($this, $this->schedule, $this->seats, $this->person, $this->paymentMethod);
        }
    }
?>