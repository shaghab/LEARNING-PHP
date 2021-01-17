<?php
    class Person {
        var $name;
        var $age;
        var $birthday = false;

        function __construct ( $name, $age) {
            $this->$name = $name;
            $this->$age = $age;
        }

        public function get_name() {
            return $this->$name;
        }

        public function get_age() {
            return $this->$age;
        }

        public function set_name($new_name) {
            $this->$name = $new_name;
        }

        public function set_birthday ( $b) {
            $this->$birthday = $b;
            $this->update_age();
        }

        private function update_age() {
            $this->$age = ($this->$birthday) ? ++$this->age : $this->age;
        }

    }

?>