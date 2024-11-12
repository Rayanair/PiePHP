<?php
namespace Model;
class HistoryModel extends \Core\Entity{
    private $bdd;
    private static $relations;

    function __construct($filds){
        parent::__construct($filds);
        $this->bdd = new \PDO("mysql:host=localhost;dbname=PiePHP","root",'root');
    }

    function create(){
      $id =  $this->bdd->query("SELECT id from users where email like '$this->email' and password like '$this->password'");
      $userid = $id->fetch();
      return $userid["id"];
    }

    function read($id){
        $id =  $this->bdd->query("SELECT * from users where id like $id");
        $userid = $id->fetch();
        return $userid;
    }

    function update($id){
        $id =  $this->bdd->query("UPDATE users set email = '$this->email', password = '$this->password' where id like 1");
    }

    function delete($id){
        $delete =  $this->bdd->query("DELETE from users where id like $id");
    }

    function read_all(){
        $all =  $this->bdd->query("SELECT * from users");
    }

    function save(){
       $this->bdd->query("INSERT into users (email, password) values('$this->email','$this->password')");
    }

    function login(){
        $em = $this->bdd->query("SELECT email from users where email like '$this->email'");
        $mail = $em->fetch();
        if($mail){
       $mdp = $this->bdd->query("SELECT password from users where email like '$this->email'");
        $pass = $mdp->fetch();
        if($this->password == $pass["password"]){
            echo "bienvenue\n";
        }else{
            echo "WESH MON REUF";
        }
    }else{
        echo "hahahha";
    }
    }  
}