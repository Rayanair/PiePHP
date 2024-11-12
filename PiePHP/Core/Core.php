<?php
namespace Core;
class Core {
        public function run() {
        // include_once "/Applications/MAMP/htdocs/PiePHP/src/routes.php";
        // $route = Router::get($_SERVER["REQUEST_URI"]);
        // var_dump($route);
        // $con = "\Controller\\".ucfirst($route["controller"])."Controller";
        // $action = $route["action"]."Action";
        // $controller = new $con();
        // $controller->$action();
      

        $route = $_SERVER["REQUEST_URI"];
        $url = explode("/", $route);
        if(isset($url[2]) && !empty($url[2])){
            $con = "\Controller\\".ucfirst($url[2])."Controller";
            if(isset($url[3]) && !empty($url[3])){
                $action = $url[3]."Action";
                if(class_exists($con)){
                    $controller = new $con();
                    if(method_exists($con,$action)){
                        $controller->$action();
                    }else{
                        require_once './src/View/Error/404.php';
                    }
            
                }else{
                    require_once './src/View/Error/404.php';
                }
            }else{

                $url[3] = "index";
                $action = $url[3]."Action";
                if(class_exists($con)){
                    $controller = new $con();
                    if(method_exists($con,$action)){
                        $controller->$action();
                    }else{
                        require_once './src/View/Error/404.php';
                    }
            
                }else{
                    require_once './src/View/Error/404.php';
                }
            }
        }else{
            $url[2] = "app";
            $con = "\Controller\\".ucfirst($url[2])."Controller";
            if(isset($url[3]) && !empty($url[3])){
                $action = $url[3]."Action";
                if(class_exists($con)){
                    $controller = new $con();
                    if(method_exists($con,$action)){
                        $controller->$action();
                    }else{
                        require_once './src/View/Error/404.php';
                    }
            
                }else{
                    require_once './src/View/Error/404.php';
                }
            }else{
                $url[3] = "index";
                $action = $url[3]."Action";
                if(class_exists($con)){
                    $controller = new $con();
                    if(method_exists($con,$action)){
                        $controller->$action();
                    }else{
                        require_once './src/View/Error/404.php';
                    }
            
                }else{
                    require_once './src/View/Error/404.php';
                }
            }
        }
        
    }
}