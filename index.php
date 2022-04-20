<?php ;
session_start();
if(empty($_SESSION['username'])){
  header('location: signin.php');
}
include 'user.class.php';
 
$username = $_SESSION['username'] ;
$signupDate = $_SESSION['signupDate'];
$_SESSION['date'] = date("Y-m-d H:i:s", strtotime('-2 hours'));


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contacts List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-dark bg-dark d-flex flex-row
 row" method="POST">
 <a href="index.php" class="text-white h3 col-3 text-decoration-none ms-2">Contact List</a> 

  <div class="col-6 mt-3" >
    <div class="text-white d-flex list-unstyled justify-content-around" >
      <li class="h5 ">Welcome <?php echo $username ?></li>
      <li class="h6"><a class="text-decoration-none text-white" href="contact.php">Contact</a></li>
      <li class="h6"><a class="text-decoration-none text-white" href="logout.php">Logout</a> </li>
    </div>
  </div>
</nav>
<section class="w-75 mt-5 d-flex flex-column mx-auto ">
<p class="h3 ">Welcome Back <?php echo $username ?> !</p>
<p class="h4 mt-3">Your profile:</p>
<hr class="bg-danger border-2 border-top border-danger">
<p class="h5 fw-bold ">UserName:  <?php echo $username ?></p>
<hr class="bg-danger border-2 border-top border-danger">
<p class="h5 fw-bold ">SignUp Date : <?php echo $signupDate ?></p>
<hr class="bg-danger border-2 border-top border-danger">
<p class="h5 fw-bold">Last Login : <?php echo $_SESSION['date'] ?></p>
</section>


</body>
</html>
