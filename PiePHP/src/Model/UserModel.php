<?php
namespace Model;
class UserModel extends \Core\Entity{
    private $bdd;

    function __construct($filds){
        parent::__construct($filds);
        $this->bdd = new \PDO("mysql:host=localhost;dbname=cinema","root",'root');
    }

    function create(){
      $id =  $this->bdd->query("SELECT id from user where email like '$this->email' and password like '$this->password'");
      $userid = $id->fetch();
      return $userid["id"];
    }

    function read($id){
        $id =  $this->bdd->query("SELECT * from user where id like $id");
        $userid = $id->fetch();
        return $userid;
    }

    function update($id){
        $id =  $this->bdd->query("UPDATE user set email = '$this->email', password = '$this->password' where id like 1");
    }

    function delete($id){
        $delete =  $this->bdd->query("DELETE from user where id like $id");
    }

    function read_all(){
        $all =  $this->bdd->query("SELECT * from user");
    }

    function save(){
       $this->bdd->query("INSERT into user (email, password) values('$this->email','$this->password')");
       header('Location: http://localhost:8888/PiePHP/');
    }

    function login(){
        $em = $this->bdd->query("SELECT email from user where email like '$this->email'");
        $mail = $em->fetch();
        if($mail){
       $mdp = $this->bdd->query("SELECT password from user where email like '$this->email'");
        $pass = $mdp->fetch();
        if($this->password == $pass["password"]){
            header('Location: http://localhost:8888/PiePHP/user/index/'.$this->create());
            exit();
        }else{
            echo "Trompé de mots de passe nullos";
        }
    }else{
        echo "Compte non existant";
    }
    }  
}
