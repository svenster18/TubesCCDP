<?php
    class jadwal implements jadwalkereta {
        public function lokal(): Lokal
        {
            return new JadwalLokal;
        }

        public function interlokal(): interlokal
        {
            return new JadwalInterlokal;
        }
    }

?>
