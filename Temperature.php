<?php	
	class Temperature
	{
		//  The core property of a Temperature object will be its Kelvin temperature.
		//  All other properties will be derived from that.
		private $kelvin = 0;

		
		//  Magic number constants are defined here to avoid any redundancy
		//  in the code below.  Beware:  If these class constants are declared
		//  as private, the interpreter will crash in DreamHost.
		const F_C_DIFFERENCE = 32.0;
		const F_C_FACTOR 	 = 5.0 / 9.0;
		const C_K_DIFFERENCE = 273.15;

		
		
		function __construct($unit, $value)
		{
			self::setTemperature($unit, $value);
		}

		function setTemperature($unit, $value)
		{
			//  Note that breaks were intentionally omitted from this switch block.
			//  This allows Fahrenheit to be converted to Celsius before that
			//  is converted to Kelvin, which in turn enables redundancy in the
			//  formulae to be avoided.
			switch ($unit) {
				case "fahrenheit":  //  Convert Fahrenheit to Celsius
					$value = (($value - self::F_C_DIFFERENCE) * self::F_C_FACTOR);
					//  no break
				case "celsius":  //  Convert Celsius to Kelvin
					$value = $value + self::C_K_DIFFERENCE;
					//  no break
				case "kelvin":  //  Store Kelvin
					$this->kelvin = $value;
					break;
			}
		}

		function getKelvin()
		{
			return $this->kelvin;
		}

		function getCelsius()
		{
			return self::getKelvin() - self::C_K_DIFFERENCE;
		}

		function getFahrenheit()
		{
			return (self::getCelsius() / self::F_C_FACTOR) + self::F_C_DIFFERENCE;
		}
	}
