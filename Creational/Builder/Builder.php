<?php 
    interface Builder {
        public function reset();
        public function setSchedule($schedule);
        public function setSeats($seats);
        public function setPerson($person);
        public function setPaymentMethod($paymentMethod);
    }
?>