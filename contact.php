<?php
session_start();
if(empty($_SESSION['username'])){
  header('location: signin.php');
}
include 'contact.class.php';
$username = $_SESSION['username'];
if(isset($_POST['save'])){

$contact = new Contact();
$contact->name = $_POST['name'];
$contact->phone = $_POST['phone'];
$contact->email = $_POST['email'];
$contact->addresse = $_POST['addresse'];
$contact->insertContact($contact->name,$contact->phone,$contact->email, $contact->addresse);

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contacts List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
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
  <section class="w-75 mx-auto mt-5">
    <table class="table caption-top">
      <h2 class="mb-4">
        Contact List:
      </h2>
      <thead>
        <tr>
          <th scope="col">Full Name</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Email</th>
          <th scope="col">Addresse</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'user.class.php';
        $stmt =Contact::fetchData();
        while($contact = $stmt->fetch(PDO::FETCH_OBJ)){
        ?>
        <tr>
          <td><?php echo $contact->name?></td>
          <td><?php echo $contact->phone?></td>
          <td><?php echo $contact->email?></td>
          <td><?php echo $contact->addresse?> </td>
          <td class="d-flex fs-4 text-info border-0 text-end">
             <i class="bi bi-pencil me-3"></i>
            <i class="bi bi-trash"></i>
          </td>

        </tr>
        <?php }   ?>
      </tbody>
    </table>
  </section>

  <section class="mt-5 w-50 mb-5 mx-auto p-4 shadow bg-light  ">
    <form method="POST" id="form" >
      <div class="row mb-4">
        <div class="col">
          <div class="form-outline">
            <label class="form-label" for="form6Example1">Full Name<span class="text-danger">*</span></label>
            <input type="text" name="name" placeholder="Full Name" id="username" class="form-control" />
            <div id="userError"  class="text-danger"></div>        
          </div>
        </div>
      </div>

      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example6">Phone<span class="text-danger">*</span></label>
        <input type="number" name="phone" placeholder="Phone" id="form6Example6" class="form-control" />
      </div>

      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example4">Email<span class="text-danger">*</span></label>
        <input type="text" name="email" placeholder="Email" id="form6Example4" class="form-control" />
      </div>


      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example7">Address<span class="text-danger">*</span></label>
        <textarea class="form-control" name="addresse" id="form6Example7" rows="3"></textarea>
      </div>

      <input type="submit" name="save" class="btn btn-primary btn-block mb-4">
    </form>
  </section>

<script src="main.js"></script>
</body>
</html>