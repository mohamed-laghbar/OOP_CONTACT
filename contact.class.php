<?php



class Contact {
public $name;
public $phone;
public $email;
public $addresse;

function insertContact($name , $phone , $email , $addresse){
  $servername = "Localhost";
  $user = "root";
  $pass = "";
  $dbname = "oop_contact";
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);

$user_id = $_SESSION['id'];
$name = $this->name;
$phone = $this->phone;
$email = $this->email;
$addresse = $this->addresse;

  $query = ("INSERT into contact (name , phone , email , addresse , user_id ) VALUES (?,?,?,?,?)");
  $stmt = $conn->prepare($query);
     $stmt->execute([$name,$phone,$email,$addresse ,$user_id]);
     header('location: contact.php');
     exit();
}


public static function fetchData(){
  $servername = "Localhost";
  $user = "root";
  $pass = "";
  $dbname = "oop_contact";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
$user_id = $_SESSION['id'];

  $sql = ("SELECT * FROM contact WHERE user_id ='$user_id' ");
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  return $stmt;
 
}

public static function delete($id){
  $servername = "Localhost";
  $user = "root";
  $pass = "";
  $dbname = "oop_contact";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
$user_id = $_SESSION['id'];

  $sql = ("DELETE FROM contact WHERE id ='$id' ");
  $stmt = $conn->prepare($sql);
  $stmt->execute();
}


}

