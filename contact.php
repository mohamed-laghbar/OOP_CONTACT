<?php
session_start();
if(empty($_SESSION['username'])){
  header('location: signin.php');
  exit();
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

$id = ''; 
if( isset( $_GET['id'])) {
    $id = $_GET['id']; 
    $objt = new Contact();
  $objt->delete($id);
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
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
  <form method="POST" class="w-75 mx-auto mt-5">
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
          <td id="name-<?php echo $contact->id?>"><?php echo $contact->name?></td>
          <td id="phone-<?php echo $contact->id?>"><?php echo $contact->phone?></td>
          <td id="email-<?php echo $contact->id?>"><?php echo $contact->email?></td>
          <td id="addr-<?php echo $contact->id?>"><?php echo $contact->addresse?> </td>
          <td class="d-flex fs-4 text-info border-0 text-end">
             <i class="bi bi-pencil  me-3" attr-id="<?php echo $contact->id?>" data-bs-toggle="modal" data-bs-target="#myModal"></i>
            <a href="contact.php?id=<?php echo $contact->id ?>"><i class="bi bi-trash text-danger"></i></a>
          </td>

        </tr>
        <?php }   ?>
      </tbody>
    </table>
  </form>

<section>

<div class="container mt-5"> 
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h3">Edit Contact</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form id='modal-form' method="POST">
                            <div class="mb-3">
                                <label class="form-label required">Name</label>
                                <input name="name" id='e-name' type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Phone</label>
                                <input name="phone" id='e-phone' type="number" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Email</label>
                                <input name="email" id='e-email' type="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Addresse</label>
                                <textarea name="addresse" id='e-addr' class="form-control"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" val='' name='e-id'>
                        <button name="submit" form='modal-form' type="submit" class="btn btn-primary">Submit</button>
                        <button  data-bs-dismiss="modal" class="btn btn-danger">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <section class="mt-5 w-50 mb-5 mx-auto p-4 shadow bg-light  ">
    <form method="POST" id="form" >
      <div class="row mb-4">
        <div class="col">
          <div class="form-outline">
            <label class="form-label" for="form6Example1">Name<span class="text-danger">*</span></label>
            <input type="text" name="name" placeholder=" Name" id="username" class="form-control" />
            <div id="userError" class="text-danger"></div>        
          </div>
        </div>
      </div>

      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example6">Phone<span class="text-danger">*</span></label>
        <input type="phone" name="phone" placeholder="Phone" id="cphone" class="form-control" />
          <div id="phoneError" class="text-danger "></div>
      </div>


      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example4">Email<span class="text-danger">*</span></label>
        <input type="text" name="email" placeholder="Email" id="cemail" class="form-control" />
          <div class="text-danger" id="mailError"></div>
      </div>


      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example7">Address<span class="text-danger">*</span></label>
        <textarea class="form-control" name="addresse" id="caddresse" rows="3"></textarea>
          <div id="adrError" class="text-danger"></div>
      </div>

      <input type="submit" name="save" class="btn btn-primary btn-block mb-4">
    </form>
  </section>
<script src="main.js"></script>

<script>
  $('#myModal').on('show.bs.modal', (e) => {
    let id = e.relatedTarget.getAttribute('attr-id');
    $('#e-name').val($(`#name-${id}`).text());
    $('#e-phone').val($(`#phone-${id}`).text());
    $('#e-email').val($(`#email-${id}`).text());
    $('#e-addr').val($(`#addr-${id}`).text());
});
</script>

</body>
</html>