<?php
namespace Core;
#[\AllowDynamicProperties]
class Entity{
    function __construct($params){
       foreach ($params as $key => $value) {
        $this->$key = $value;
       }
    }
}