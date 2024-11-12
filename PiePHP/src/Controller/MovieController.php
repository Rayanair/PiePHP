<?php
namespace Controller;
class MovieController extends \Core\Controller{

    public function addAction(){
        $this->render('register');
    }

    public function logAction(){
        $this->render('login');
    }

    public function indexAction(){
        $model = new \Model\MovieModel($_POST);
        $this->render('index', $model->read_all());
    
    }

    public function showAction(){
        $id = $_SERVER["REQUEST_URI"];
        $userid = explode("/", $id);
        $this->show($userid[4]);
    }

    public function registerAction(){
    $model = new \Model\UserModel($_POST);
    $model->save();
    }

    public function supprimerAction(){
        $orm = new \Core\ORM(); 
        $id = $_SERVER["REQUEST_URI"];
        $userid = explode("/", $id);
        $orm->delete("movie",$userid[4]);
        header('Location: http://localhost:8888/PiePHP/');
    }

    public function show($id) {
        $orm = new \Core\ORM(); 
        $this->render('show', $orm->read("movie", $id));
    }

    public function loginAction(){
        $model = new \Model\UserModel($_POST['email'],$_POST['password']);
        $model->login();
    }

}