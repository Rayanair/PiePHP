<?php
namespace Core;
class Request{
    function request(){
        foreach($_POST as $value){
            $trimmed = trim($value);
            $trimmed;
           $str = stripslashes($trimmed);
           $new = htmlspecialchars($str, ENT_QUOTES);
           echo $new;
        }
    }
}