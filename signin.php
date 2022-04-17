<?php 
include_once 'USER.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(!empty($_POST['username']) && $_POST['password']){
    
     $user = new User();
     $user->username = $_POST['username'];
     $user->password = $_POST['password'];

     session_start();
     $_SESSION['username'] = $user->username;

     
     $user->login($user->username , $user->password);

}}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>How To Create Simple Login Form Design In Bootstrap 5</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form id="form" action="" method="POST" class="row g-3">
                        <h4>Welcome Back</h4>
                        <div class="col-12">
                            <label>UserName</label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                            <div class="text-danger" id="userError"></div>
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                            <div class="text-danger" id="passError"></div>

                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input name="remember_me" class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe"> Remember me</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <input type="submit" class="btn btn-dark float-end" value="Login">
                        </div>
                    </form>
                    <hr class="mt-4">
                    <div class="col-12">
                        <p class="text-center mb-0">Have not account yet? <a href="signup.php">Signup</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <script src="main.js"></script>   
</body>
</html>