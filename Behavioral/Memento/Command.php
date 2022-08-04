<?php 
    class Command {
        private $backup;

        public function makeBackup($trip) {
            $this->backup = $trip->recordEditHistory();
        }

        public function undo() {
            if ($this->backup != null) {
                $this->backup->restore();
            }
        }
    }
?>