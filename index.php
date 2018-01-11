<?php
//index.php
require_once "Temperature.php";


if(isset($_POST["Temperature"])){ //if there is data show it
	
  	if(!isset($_POST["toType"]) || !isset($_POST["fromType"])){
    	echo '<b>*Please enter a temperature and select desired conversion types below*</b><br />';
        echo '<br />';
        
    }else{
        $fromTemperature = $_POST["Temperature"];
        $toType = $_POST["toType"];
        $fromType = $_POST["fromType"];

        //echo '<br />';

        $temperature = new Temperature($fromType, $fromTemperature);

        echo '<pre>';  //  Preserve whitespace in the HTML that follows (optional).

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


  echo '
    <form action="" method="post">
    <label>
    Temperature: <br />
    <input
        type="number" 
        name="Temperature" 
        placeholder="Put temperature here" 
        required="required" 
        size="30"
        maxlength="60" 
        autofocus
        title="Temperature is required" 
        tabindex="10" 
        />
    </label>
    
    <br />
    
    <label>From:</label>
    
	<br /> 
    
    <input 
        type="radio" 
        name="fromType" 
        value="Celsius" />
	<label>Celsius</label>
    
	<br />

    <input 
        type="radio" 
        name="fromType" 
        value="Fahrenheit" />
	<label>Fahrenheit</label>
    
	<br />

    <input 
        type="radio" 
        name="fromType" 
        value="Kelvin" />
	<label>Kelvin</label>
    
	<br />

    <label>
    To:
	</label>
	<br />

    <label>    
    <input 
        type="radio" 
        name="toType" 
        value="Celsius" />
    <label>Celsius</label>
    <br />

    <input 
        type="radio" 
        name="toType" 
        value="Fahrenheit" />
	<label>Fahrenheit</label>
	<br />

    <input 
        type="radio" 
        name="toType" 
        value="Kelvin" />
	<label>Kelvin</label>
	<br />
    
    <input type="submit" />
    </form>
      ';

