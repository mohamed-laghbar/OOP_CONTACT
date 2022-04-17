<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contacts List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
<link rel="stylesheet" href="style.css">    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css">
</head>
<body>
<main class="d-flex gap-3 flex-column w-75 mx-auto" >
<h3 class="mb-5">Contact List :</h3>

<div class="d-flex card-style justify-content-around  bg-info ">

    <p>Mohamed</p>
    <p>mohamed@gmail.com</p>
    <p>0654912156</p>
    <P>Youssofia Rmeal NR 270 Marrakech safi</P>
    <div class="d-flex flex-column gap-2">
        <button class="btn btn-primary">Delete</button>
        <button class="btn btn-primary">Edit</button>
    </div>
</div>
<div class="d-flex card-style justify-content-around  bg-info ">
    <p>Mohamed</p>
    <p>mohamed@gmail.com</p>
    <p>0654912156</p>
    <P>Youssofia Rmeal NR 270 Marrakech safi</P>
    <div class="d-flex flex-column gap-2">
        <button class="btn btn-primary">Delete</button>
        <button class="btn btn-primary">Edit</button>
    </div>
</div>
<div class="d-flex card-style justify-content-around p-4 bg-info ">
    <p>Mohamed</p>
    <p>mohamed@gmail.com</p>
    <p>0654912156</p>
    <P>Youssofia Rmeal NR 270 Marrakech safi</P>
    <div class="d-flex flex-column gap-2">
        <button class="btn btn-primary">Delete</button>
        <button class="btn btn-primary">Edit</button>
    </div>
</div>

</main>
<section class="mt-5">
<form class="w-50 mx-auto">
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="form6Example1">Full Name<span class="text-danger">*</span></label>
        <input type="text" placeholder="Full Name" id="form6Example1" class="form-control" />
      </div>
    </div>
  </div>

  <div class="form-outline mb-4">
    <label class="form-label"  for="form6Example6">Phone<span class="text-danger">*</span></label>
    <input type="number" placeholder="Phone" id="form6Example6" class="form-control" />
  </div>

  <div class="form-outline mb-4">
    <label class="form-label" for="form6Example4">Email<span class="text-danger">*</span></label>
    <input type="text" placeholder="Email" id="form6Example4" class="form-control" />
  </div>

  
  <div class="form-outline mb-4">
  <label class="form-label" for="form6Example7">Address<span class="text-danger">*</span></label>
    <textarea class="form-control" id="form6Example7" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-primary btn-block mb-4"> Save</button>
</form>
</section>     
</body>
</html>