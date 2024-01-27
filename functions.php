<?php
// checked box checked function 
function CheckedInput($input, $value)
{
    if (isset($_POST[$input]) && is_array($_POST[$input]) && in_array($value, $_POST[$input])) {
        echo "checked";
    }
}

// select Options Loop 

function createOptions($options){
    foreach($options as $option){
        printf("<option value='%s' >%s</option>",strtolower($option),ucwords($option));
    }
}
