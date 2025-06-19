<?php
class User{
     //db connection
     private $conn;
     //db table name
     private $tableName = "user";

     public $id;
     public $username;
     public $email;
     public $password;

      //class constructor
    public function __construct($db){
        $this->conn = $db;
        $this->id=1;
    }

    function getUsernameById(){
        $query="SELECT username FROM ".$this->tableName." WHERE id=? LIMIT 0,1";

        $stmt=$this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->username=$row['username'];
    }
}
?>