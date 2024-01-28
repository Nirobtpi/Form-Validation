<?php
// checked box checked function 
function CheckedInput($input, $value)
{
    if (isset($_POST[$input]) && is_array($_POST[$input]) && in_array($value, $_POST[$input])) {
        echo "checked";
    }
}

// select Options Loop 

function createOptions($options)
{
    foreach ($options as $option) {
       
        // $selected = in_array($option, $val) ? 'selected' : '';
        // $selected="";
        // if(in_array($option,$val)){
        //     $selected= 'selected';
        // }
        printf("<option value='%s' >%s</option>", strtolower($option), ucwords($option));
    }
};

function getValue($value){
    if(isset($_POST[$value])){
        echo $_POST[$value];
    }
}


