<?php

require_once "Temperature.php";


if(isset($_POST["Temperature"]))
{//if there is data show it
    //test output
    echo $_POST["Temperature"];
	$fromTemperature = $_POST["Temperature"];
    echo '<br />';

    echo $_POST["Type"];
    $fromType = $_POST["Type"];
    echo '<br />';
    echo '<br />';

////////////////////////////////////////////////////////////////////////////////////	
//
//  NOTE TO TEAM MEMBERS:
//
//  The following block of code is intended only as an example of
//  how to create and initialize the Temperature object, as well as
//  how to get the Kelvin, Celsius, and Fahrenheit temperatures out of it.
//  
//
//  Create a new Temperature object and initialize it with the following arguments:
//  $fromType can be "fahrenheit", "celsius", or "kelvin";
//  $fromTemperature is any floating-point number or integer.
//  In this case, both $fromType and $fromTemperature come from the $_POST variable.
	$temperature = new Temperature($fromType, $fromTemperature);

	echo '<pre>';  //  Preserve whitespace in the HTML that follows (optional).

//  printf() means "PRINT with Formatting"  Bill's program specification requires
//  rounding off our results to two decimal places.  The %8.2f part of the
//  printf() function calls accomplish just that.
	printf("%8.2f Kelvin<br />", $temperature->getKelvin());
	printf("%8.2f °Celsius<br />", $temperature->getCelsius());
	printf("%8.2f °Fahrenheit<br />", $temperature->getFahrenheit());

	echo '</pre>';  //  Stop preserving whitespace.
//
//
//  Aliya will replace this section with a more user-friendly output format.
//	
////////////////////////////////////////////////////////////////////////////////////	

	
/*    switch ($fromType)
    {//determines the type of temperature being calculated
        case "celsius":
            switch ($toType)
            {
                case "celsius":
                    //add equation;
                    break;
                case "fahrenheit":
                    //add equation;
                    break;
                case "kelvin":
                    //add equation;
                    break;
            }
        case "fahrenheit":
            switch ($toType)
            {
                case "celsius":
                    //add equation;
                    break;
                case "fahrenheit":
                    //add equation;
                    break;
                case "kelvin":
                    //add equation;
                    break;
            }
        case "kelvin":
            switch ($toType)
            {
                case "celsius":
                    //add equation;
                    break;
                case "fahrenheit":
                    //add equation;
                    break;
                case "kelvin":
                    //add equation;
                    break;
            }
    }
*/
}else{//show form
    echo '
    <form action="" method="post">

    <label>
        Temperature:
		<br />
		<input
			type="number"
			name="Temperature"
			placeholder="Put temperature here"
			required="required"
			tabindex="10"
			title="Temperature is required" />
	</label>
    <br />

    <label>
        From:
	</label>
	<br />
        
    <input 
        type="radio"
        name="Type"
        value="celsius" />
	<label>Celsius</label>
	<br />

    <input 
        type="radio" 
        name="Type"
        value="fahrenheit" />
	<label>Fahrenheit</label>
	<br />

    <input 
        type="radio" 
        name="Type"
        value="kelvin" />
	<label>Kelvin</label>
	<br />

    <label>
		To:
	</label>
	<br />

    <label>    
		<input 
			type="radio"
			name="fromType"
			value="celsius" />
        <label>Celsius</label>
        <br />

    <input 
        type="radio" 
        name="fromType"
        value="fahrenheit" />
	<label>Fahrenheit</label>
	<br />

    <input 
        type="radio" 
        name="fromType"
        value="kelvin" />
	<label>Kelvin</label>
	<br />
    
    <input type="submit" />
    </form>
    ';
}

