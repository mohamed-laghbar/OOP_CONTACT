<?php 
session_start();
include 'user.class.php';

if(isset($_POST["submit"])){

    if(!empty($_POST['username']) && $_POST['password']){
        
     $user = new User();
     $user->username = $_POST['username'];
     $user->password = $_POST['password'];
     $user->login($user->username , $user->password);
}}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign in - Contact List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container  ">
        <div class="row">
            <div class="col-md-4 offset-md-4 mt-5 form-shadow rounded">
                <div class="login-form bg-light mt-4 p-4">
                    <form id="form" action="" method="POST" class=" row g-3">
                        <h4>Welcome Back</h4>
                        <div class="col-12">
                            <label>Username</label>
                            <input type="text" id="username"  name="username" value="<?php if(!empty($_COOKIE['username'])){ echo $_COOKIE['username'];}?>" class="form-control" placeholder="Username">
                            <div id="userError" class="text-danger"></div>                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password"  name="password" class="form-control" placeholder="Password">
                           

                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input name="remember_me" class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe"> Remember me</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <input type="submit" name="submit" class="btn btn-dark float-end" value="Login">
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