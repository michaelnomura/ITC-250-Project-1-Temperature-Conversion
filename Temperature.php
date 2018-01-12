<?php
    class Temperature
    {
        //  The core property of a Temperature object will be its Kelvin temperature.
        //  All other properties will be derived from that.
        private $kelvin = 0;

        
        //  Magic number constants are defined here to avoid any redundancy
        //  in the code below.  Beware:  If these class constants are declared
        //  as private, the interpreter will crash in DreamHost.
        const private F_C_DIFFERENCE = 32.0;
        const private F_C_FACTOR      = 5.0 / 9.0;
        const private C_K_DIFFERENCE = 273.15;

        
        
        function __construct($unit, $value)
        {
            self::setTemperature($unit, $value);
        }

        function setTemperature($unit, $value)
        {
            switch($unit) {
                case "Fahrenheit":  //  Convert Fahrenheit to Celsius
                    $value = (($value - self::F_C_DIFFERENCE) * self::F_C_FACTOR);
                    //  no break
                case "Celsius":  //  Convert Celsius to Kelvin
                    $value += self::C_K_DIFFERENCE;
                    //  no break
                case "Kelvin":  //  Store Kelvin
                    $this->kelvin = $value;
                    break;
            }
        }

        public function getKelvin()
        {
            return $this->kelvin;
        }

        public function getCelsius()
        {
            return self::getKelvin() - self::C_K_DIFFERENCE;
        }

        public function getFahrenheit()
        {
            return (self::getCelsius() / self::F_C_FACTOR) + self::F_C_DIFFERENCE;
        }
    }
