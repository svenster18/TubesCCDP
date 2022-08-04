<?php

    class Director {

        public function orderLocal($builder) {
            $builder->reset();
            $builder->setSchedule("09:00-10:00");
            $builder->setSeats("A1, A2");
            $builder->setPerson(2);
            $builder->setPaymentMethod("Gopay");
        }
        
        public function orderInterLocal($builder) {
            $builder->reset();
            $builder->setSchedule("09:00-17:00");
            $builder->setSeats("A1");
            $builder->setPerson(1);
            $builder->setPaymentMethod("Credit Card");
        }
    }
?>