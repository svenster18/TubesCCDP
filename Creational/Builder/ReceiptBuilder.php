<?php 

    require_once('Receipt.php');

    class ReceiptBuilder implements Builder {
        private $receipt;

        public function reset() {
            $this->receipt = new Receipt();
        }
        public function setSchedule($schedule) {
            $schedule = "Jadwal : ".$schedule;
            $this->receipt->setSchedule($schedule);
        }
        public function setSeats($seats) {
            $seats = "Kursi : ".$seats;
            $this->receipt->setSeats($seats);
        }
        public function setPerson($person){
            $person = "Orang : ".$person;
            $this->receipt->setPerson($person);
        }
        public function setPaymentMethod($paymentMethod){
            $paymentMethod = "Metode Pembayaran : ".$paymentMethod;
            $this->receipt->setPaymentMethod($paymentMethod);
        }
        public function print(): Receipt {
            return $this->receipt;
        }
    }
?>