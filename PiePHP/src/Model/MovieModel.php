<?php
namespace Model;
class MovieModel extends \Core\Entity{
    private $bdd;
    private static $relations;

    function __construct($filds){
        parent::__construct($filds);
        $this->bdd = new \PDO("mysql:host=localhost;dbname=cinema","root",'root');
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
        $all =  $this->bdd->query("SELECT * from movie");
        $filmarray = [];
        if($all->rowCount() > 0){
            while($films = $all->fetch()){
                array_push($filmarray, $films );
            }
        }
        return $filmarray;
    }

    function save(){
       $this->bdd->query("INSERT into users (email, password) values('$this->email','$this->password')");
    }
      
}