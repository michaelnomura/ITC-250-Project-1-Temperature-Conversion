<?php
if(isset($_POST["Temperature"]))
{//if there is data show it
    echo $_POST["Temperature"];
    echo '<br />';
    echo $_POST["Type"];
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
        What type of temperature:
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
    
    <input type="submit" />
    </form>
    ';
}
