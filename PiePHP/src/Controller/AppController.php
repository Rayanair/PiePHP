<?php 
namespace Controller;
class AppController extends \Core\Controller{
    function indexAction(){
        $this->render('index');
    }
}