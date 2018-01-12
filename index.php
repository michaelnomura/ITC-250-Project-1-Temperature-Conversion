<?php
require_once "Temperature.php";

if(isset($_POST["Temperature"])){ //if there is data show it
	
  	if(!isset($_POST["toType"]) || !isset($_POST["fromType"])){
    	echo '<b>*Please enter a temperature and select desired conversion types below*</b><br />';
        echo '<br />';
        
    } else {
        $fromTemperature = $_POST["Temperature"];
        $toType = $_POST["toType"];
        $fromType = $_POST["fromType"];

        $temperature = new Temperature($fromType, $fromTemperature);

        echo '<pre>';  // Preserve whitespace in the HTML that follows (optional).

        echo $fromTemperature . ' ' . ($fromType == 'Kelvin' ? '' : 'degrees ') . $fromType . ' = ';

        switch($toType){
            case "Kelvin":
                printf("%.2f Kelvin<br />", $temperature->getKelvin());
                break;
            case "Celsius":
                printf("%.2f °Celsius<br />", $temperature->getCelsius());
                break;
            case "Fahrenheit":
                printf("%.2f °Fahrenheit<br />", $temperature->getFahrenheit());
                break;      		
        }
        echo '</pre>';  //  Stop preserving whitespace.
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Temperature Conversion </title>
        <link id="stylesheet" rel="stylesheet" href="css/styles.css">
        <meta charset="utf-8">
        <meta name="robots" content="noindex,nofollow">
    </head>
    <body>
        <h1> Temperature Converter </h1>
        
        <form action="" method="post">
            Temperature:
            <input type="number" name="Temperature" placeholder="enter temperature" title="Temperature is required." size="30" tabindex="10" required="required" autofocus/>
            <br>
            <p> From: </p>
            <br>
            <input type="radio" name="fromType" id="celsius1" value="Celsius">
            <label for="celsius1"> Celsius (&deg;C) </label>
            <br>
            <input type="radio" name="fromType" id="fahrenheit1" value="Fahrenheit">
            <label for="fahrenheit1"> Fahrenheit (&deg;F) </label>
            <br>
            <input type="radio" name="fromType" id="kelvin1" value="Kelvin">
            <label for="kelvin1"> Kelvin (K) </label>
            <br>
            <p> To: </p>
            <br>
            <input type="radio" name="toType" id="celsius2" value="Celsius">
            <label for="celsius2"> Celsius (&deg;C) </label>
            <br>
            <input type="radio" name="toType" id="fahrenheit2" value="Fahrenheit">
            <label for="fahrenheit2"> Fahrenheit (&deg;F) </label>
            <br>
            <input type="radio" name="toType" id="kelvin2" value="Kelvin">
            <label for="kelvin2"> Kelvin (K) </label>
            <br>
            <input type="submit" value="CONVERT">
        </form>
        <footer>
            <small> Copyright &copy; 2018. All rights reserved.
                <br> <a href="http://validator.w3.org/check/referer" target="_blank"> valid HTML</a> | <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank"> valid CSS </a>
            </small>
        </footer>
    </body>
</html>
