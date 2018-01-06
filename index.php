<?php
if(isset($_POST["Temperature"]))
{//if there is data show it
    //test output
    echo $_POST["Temperature"];
    echo '<br />';
    echo $_POST["Type"];
    $fromType = $_POST["Type"];
    switch ($fromType)
    {//determines the type of temperature being calculated
        case "celcius":
            switch ($toType)
            {
                case "celcius":
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
                case "celcius":
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
                case "celcius":
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
}else{//show form
    echo '
    <form action="" method="post">
    <lable>
        Temperature:
    <br />
    <input
        type="number"
        name="Temperature"
        placeholder="Put temperature here"
        required="required"
        tabindex="10"
        title="Temperature is required" />
        </lable>
    <br />
    <lable>
        From:
        </lable>
        <br />
        
    <input 
        type="radio"
        name="Type"
        value="celcius" />
        <lable>Celcius</lable>
        <br />

    <input 
        type="radio" 
        name="Type"
        value="fahrenheit" />
        <lable>Fahrenheit</lable>
        <br />

    <input 
        type="radio" 
        name="Type"
        value="kelvin" />
        <lable>Kelvin</lable>
        <br />
        To :
        </lable>
        <br />
    <lable>    
    <input 
        type="radio"
        name="fromType"
        value="celcius" />
        <lable>Celcius</lable>
        <br />

    <input 
        type="radio" 
        name="fromType"
        value="fahrenheit" />
        <lable>Fahrenheit</lable>
        <br />

    <input 
        type="radio" 
        name="fromType"
        value="kelvin" />
        <lable>Kelvin</lable>
        <br />
    
    <input type="submit" />
    </form>
    ';
}
