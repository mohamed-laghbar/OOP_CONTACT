<?php 
include_once 'USER.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(!empty( $_POST['username']) && !empty( $_POST['password'])){
    
     $user = new User();
     $user->username = $_POST['username'];
     $user->password = $_POST['password'];
     
     $user->insert();
     header("location: signin.php");
     exit;

}}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>How To Create Simple Login Form Design In Bootstrap 5</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="signup-form">
                <form id="form" class="mt-5 border p-4 bg-light shadow" method="POST">
                    <h4 class="mb-5 text-secondary">Create Your Account</h4>
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label>UserName<span class="text-danger">*</span></label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Enter Your UserName">
                            <div id="userError"  class="text-danger"></div>
                        </div>

                        

                        <div class="mb-3 col-md-12">
                            <label>Password<span class="text-danger">*</span></label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
                            <div id="passError" class="text-danger"></div>

                        </div>

                        <div class="mb-3 col-md-12">
                            <label>Confirm Password<span class="text-danger">*</span></label>
                            <input type="password" id="confpassword" name="confirmpassword" class="form-control" placeholder="Confirm Password">
                            <div id="confpassError" class="text-danger"></div>

                        </div>
                        <div class="col-md-12">
                           <input type="submit" class="btn btn-primary float-end" value="Sign Up Now">
                        </div>
                    </div>
                </form>
                <p class="text-center mt-3 text-secondary">If you have account, Please <a href="signin.php">Login Now</a></p>
            </div>
        </div>
    </div>
</div>
<script src="main.js"></script>
</body>
</html>