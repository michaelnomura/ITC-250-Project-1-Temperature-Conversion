<?php
if(isset($_POST["Temperature"]))
{//if there is data show it
    echo $Temperature = $_POST["Temperature"];
}else{//show form
    echo '
    <form>
    <lable>
    Temperature:
    <br />
    <input
    type="number"
    placeholder="Put temperature here"
    required="required"
    tabindex="10"
    title="Temperature is required"    
    </form>
    <br />
    <input type="submit" />
    </form>
    ';
}
