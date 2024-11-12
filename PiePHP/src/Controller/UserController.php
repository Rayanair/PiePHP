<?php
namespace Controller;
class UserController extends \Core\Controller{

    public function addAction(){
        $this->render('register');
    }

    public function logAction(){
        $this->render('login');
    }
    public function indexAction(){
        $this->render('index');
    }

    public function modifierAction(){
        $this->render('modifier');
    }

    public function updateAction(){
        $orm = new \Core\ORM(); 
        $id = $_SERVER["REQUEST_URI"];
        $userid = explode("/", $id);
        $orm->update("user", $userid[4], $_POST);
        header('Location: http://localhost:8888/PiePHP/user/index/'.$userid[4]);
    }

    public function supprimerAction(){
        $orm = new \Core\ORM(); 
        $id = $_SERVER["REQUEST_URI"];
        $userid = explode("/", $id);
        $orm->delete("user",$userid[4]);
        header('Location: http://localhost:8888/PiePHP/');
    }

    public function registerAction(){
    // $model = new \Model\UserModel($_POST);
    // $model->save();
    $orm = new \Core\ORM(); 
    $orm->save("user", $_POST);
    }

    public function showAction() {
        $id = $_SERVER["REQUEST_URI"];
        $userid = explode("/", $id);
        $this->show($userid[4]);
    }

    public function show($id) {
        $orm = new \Core\ORM(); 
        $this->render('show', $orm->read("user", $id));
    }

    public function loginAction(){
        $model = new \Model\UserModel($_POST);
        $model->login();
    }

}