<?php 
spl_autoload_register(function($class){
    $z = '"\"';
    $slash = explode('"', $z);
    $cla = explode($slash[1], $class);
    
    
    if(file_exists('Core/' . $cla[1]. '.php'))
    {
        require_once 'Core/' . $cla[1] . '.php';
        return true;
    }

    if(file_exists('./src/Controller/' . $cla[1] . '.php') )
    {
        require_once './src/Controller/' . $cla[1] . '.php';
        return true;
    }

    if(file_exists('/Applications/MAMP/htdocs/PiePHP/src/Model/' . $cla[1] . '.php') )
    {
        include_once('/Applications/MAMP/htdocs/PiePHP/src/Model/' . $cla[1] . '.php');
        return true;
    }

});


