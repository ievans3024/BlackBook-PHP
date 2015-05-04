<?php


    class Address {
        public $line1;
        public $line2;
        public $city;
        public $state;
        public $zip;
        public $country;

        function __construct (
            &$line1,
            &$line2,
            &$city,
            &$state,
            &$zip,
            &$country
        ) {
            $this->$line1 = $line1;
            $this->$line2 = $line2;
            $this->$city = $city;
            $this->$state = $state;
            $this->$zip = $zip;
            $this->$country = $country;
        }
    }


    class Person {
        public $name_first;
        public $name_last;
        public $emails;
        public $phone_numbers;
        public $addresses;

        function __construct (
            &$name_first = NULL,
            &$name_last = NULL,
            &$emails = array(),
            &$phone_numbers = array(),
            &$addresses = array()
        ) {
            $this->$name_first = $name_first;
            $this->$name_last = $name_last;
            $this->$emails = $emails;
            $this->$phone_numbers = $phone_numbers;
            $this->$addresses = $addresses;
        }

        private function array_append (&$array, &$value, &$key) {
            if (is_null($key))
            {
                /* auto-assign a numeric id */
                $array[] = $value;
            }
            else
            {
                /*
                    assign with user-specified identifier,
                    cast as a string for separation from numeric ids
                */
                $array_property[$key] = $value;
            }
        }

        public function append_address (&$address, &$identifier) {
            $this->array_append($this->$addresses, $address, $identifier);
        }

        public function append_phone_number (&$phone_number, &$identifier) {
            $this->array_append($this->$phone_numbers, $phone_number, $identifier);
        }

        public function append_email (&$email, &$identifier) {
            $this->array_append($this->$emails, $email, $identifier);
        }
    }

?>