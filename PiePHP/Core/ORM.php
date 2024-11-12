<?php
namespace Core;
class ORM{
    private $bdd;

    function __construct(){
        $this->bdd = new \PDO("mysql:host=localhost;dbname=cinema","root",'root');
    }

    public function create ($table, $fields) {
        $query = "SELECT id from $table where  ";
        $count = 0;
        foreach ($fields as $key => $value) {
            if($count == 0){
                $r = " $key like '$value'";
                $count++;
            }else{
                $r = "and $key like '$value'";
            }
           $query .= $r;
        }
      $id =  $this->bdd->query($query);
      $userid = $id->fetch();
      return $userid["id"];
    }

    public function read ($table, $id) {
        $is =  $this->bdd->query("SELECT * from $table where id = $id");
        $userid = $is->fetch();
        return $userid;
    }

    public function update ($table, $id, $fields) {
        $query = "UPDATE $table set ";
        $count = 0;
        foreach ($fields as $key => $value) {
            if($count == 0){
                $r = " $key = '$value'";
                $count++;
            }else{
                $r = ", $key = '$value'";
            }
           $query .= $r;
        }
        echo $query = $query." where id = $id";
        $id =  $this->bdd->query("$query");
        return true;
    }
    public function delete ($table, $id) {
        $delete =  $this->bdd->query("DELETE from $table where id = $id");
        return true;
    }

    function save($table, $fields){
        $query = "INSERT into $table (";
        $count = 0;
        foreach ($fields as $key => $value) {
            if($count == 0){
                $r = "$key";
                $count++;
            }else{
                $r = ",$key";
            }
           $query .=$r;
        }

        foreach ($fields as $key => $value) {
            if($count == 1){
                $r = ") values('$value'";
                $count++;
            }else{
                $r = ",'$value'";
            }
           
           $query .=$r;
        }
        $this->bdd->query($query.")");
        header('Location: http://localhost:8888/PiePHP/');

        // $this->bdd->query("INSERT into $table (email, password) values('$this->email','$this->password')");
     }

    public function find ($table, $params = array(
        'WHERE' => '1',
        'ORDER BY' => 'id ASC', 
        'LIMIT' => ''
    )) {


    }
}


