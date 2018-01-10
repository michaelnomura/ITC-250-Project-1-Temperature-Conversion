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

	$temperature = new Temperature($fromType, $fromTemperature);
	echo '<pre>';
	printf("%8.2f  Kelvin<br />", $temperature->getKelvin());
	printf("%8.2f° Celsius<br />", $temperature->getCelsius());
	printf("%8.2f° Fahrenheit<br />", $temperature->getFahrenheit());
	echo '</pre>';

	
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
        To :
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

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Temperature Conversion</title>
    <meta name="robots" content="noindex,nofollow" />
    <link id="stylesheet" rel="stylesheet" href="css/styles.css" />
</head>
<body>
    <h1>Temperature Converter</h1>
    <form method="post" action ="index.php">
    Enter a temperature <input type ="number" name="TempDegree" /><br />
    <select name="Temp1">
        <option value="f">Fahrenheit</option>
        <option value="c">Celsius</option>
        <option value="k">Kelvin</option>
    </select>
    <p>to</p>
    <select name="Temp2">
        <option value="f">Fahrenheit</option>
        <option value="c">Celsius</option>
        <option value="k">Kelvin</option>
    </select>
    <br>
    <input type ="submit" value="Convert" /><br />
    </form>

</body>



<footer>
   <small>
   &copy; 2018, All Rights Reserved  
       <br />
   <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a>
    <br />
   <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
   </small> 

</footer>
</html>
