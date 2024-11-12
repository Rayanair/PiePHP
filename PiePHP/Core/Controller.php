<?php
namespace Core;
class Controller{
    private $_render;

    function __construct(){
        $request = new \Core\Request();
        $request->request();
    }
    protected function render($view, $scope = []) { 
        extract($scope);
        $r = str_replace("\\", "", basename(get_class($this)));
        $f = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View', str_replace('Controller', '', $r ), $view]) . '.php';
        if (file_exists($f)) {
            ob_start();
            include($f);
            $view = ob_get_clean();
            ob_start();
            include(implode(DIRECTORY_SEPARATOR ,[dirname(__DIR__),'src', 'View', 'index']) . '.php'); 
            $this->_render = ob_get_clean();
        }
    }

    function __destruct(){
        echo $this->_render;
    }
}