<?php include 'USER.php';
session_start();
 
$username = $_SESSION['username'] ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contacts List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-dark bg-dark d-flex flex-row
 row">
  <h2 class="text-white col-3 ms-2">Contact List</h2>

  <div class="col-6 mt-3" >
    <ul class="text-white d-flex list-unstyled justify-content-around" >
      <li class="h5 ">Welcome <?php echo $username ?></li>
      <li class="h6">Contact<a href="contact.php"></a></li>
      <li class="h6">Logout</li>
    </ul>
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
<p class="h5 fw-bold">Last Login : <?php echo $lastLogin ?></p>
</section>


</body>
</html>