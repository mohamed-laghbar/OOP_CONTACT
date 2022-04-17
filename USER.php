<?php

class User
{
   public $username;
   public $password;

   function insert()
   {
      $servername = "Localhost";
      $user = "root";
      $pass = "";
      $dbname = "oop_contact";

      $username = $this->username;
      $password = hash('sha256', $this->password);


      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
      $sql = ("INSERT INTO users (username , password) VALUES (? , ?)  ");
      $stmt = $conn->prepare($sql);
      $stmt->execute([$username, $password]);
   }

   public static function login($username, $password)
   {
      $servername = "Localhost";
      $user = "root";
      $pass = "";
      $dbname = "oop_contact";

      $password = hash('sha256', $password);

      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
      $sql = "SELECT *  FROM users WHERE username = ? AND password= ?";
      $stmt = $conn->prepare($sql);
      $stmt->execute([$username, $password]);
      $count = $stmt->rowCount();
      if ($count == 1) {
         header("location: index.php");
      }
   }

   public function logout(){
      session_start();
      session_destroy();
      header("location: signin.php");
   }
}
