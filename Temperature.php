<?php	
	class Temperature {
		//  The core property of a Temperature object will be its Kelvin temperature.  All other properties will be derived from that.

/*		const Kelvin		= 0;
		const Celsius		= 1;
		const Fahrenheit	= 2;
*/		
		//  Magic number constants are defined here to avoid any redundancy in the code below.
		private const FtoC_Difference = 32.0;
		private const FtoC_Factor 	  = 5.0 / 9.0;
		private const CtoK_Difference = 273.15;

		private $kelvin;
		
		function Temperature($unit, $value) {  //  constructor method
			self::setTemperature($unit, $value);
		}

		function setTemperature($unit, $value) {
			switch ($unit) {  //  Note that breaks were intentionally omitted from this switch block.  This allows Fahrenheit to be converted to Celsius before that is converted to Kelvin, which in turn enables redundancy in the formulae to be avoided.
				case "fahrenheit":  //  Convert Fahrenheit to Celsius
					$value = (($value - self::FtoC_Difference) * self::FtoC_Factor);
				case "celsius":  //  Convert Celsius to Kelvin
					$value = $value + self::CtoK_Difference;
				case "kelvin":  //  Store Kelvin
					$this->kelvin = $value;
					break;
			}
		}

		function getKelvin() {
			return $this->kelvin;
		}

		function getCelsius() {
			return $this->kelvin - self::CtoK_Difference;
		}

		function getFahrenheit() {
			return (self::getCelsius() / self::FtoC_Factor) + self::FtoC_Difference;
		}
	}
?>