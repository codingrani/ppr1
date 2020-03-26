<?php 
    function isempty($arr)
    {
        $error=array();
        foreach($arr as $key=>$value)
        {
            if(empty($value))
            {
                $error=$key." is empty";
            }
        }
        return $error;
    }
    function sanatization($arr)
    {
        foreach($arr as $key=>$value)
        {
            $_POST[$key] = filter_var($value, FILTER_SANITIZE_STRING);
                trim($value);
        }
    }
?>