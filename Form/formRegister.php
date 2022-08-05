<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<?php

include("header.php");

?>
    <div class="container">
<div class="card">
  <div class="card-header">
    RegisterForm
  </div>
  <div class="card-body">
    <form name="form1" action="#" method="post" action="/action_page.php" class="was-validated">
        <div class="row"> <!--row1-->
        <div class="col-md-4">
        <label for="fname" class="form-label">Firstname</label>
        <select class="form-select" aria-label="Default select example">
         <option value="1">Mr.</option>
        <option value="2">Ms.</option>
        <option value="3">Mrs.</option>
        </select>
</div>
        <div class="col-md-4">
        <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your Name" name="name" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Please fill your Name.</div>
        </div>
        <div class="col-md-4">
        <label for="lname" class="form-label">Lastname</label>
            <input type="text" class="form-control" id="lname" placeholder="Enter your Lastname" name="lname" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Please fill your Lastname.</div>
        </div>
  </div>
  <div class="row"> <!--row2-->
        <div class="col-md-3">
        <label for="uname" class="form-label">Sex</label>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
        <label class="form-check-label" for="flexRadioDefault1">
         Male
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
        <label class="form-check-label" for="flexRadioDefault2">
         Female
        </label>
</div>
</div>
        <div class="col-md-3">
        <label for="uname" class="form-label">Date of Birth</label>
            <input type="text" class="form-control" id="BD" placeholder="mm/dd/yyyy" name="BD" required>
            
            <div class="invalid-feedback">Please fill your BirthDate.</div>
            </div>
        <div class="col-md-3">
        <label for="ad" class="form-label">Address</label>
            <input type="text" class="form-control" id="ad" placeholder="Enter your Address" name="ad" required>
            
            <div class="invalid-feedback">Please fill your Address.</div>




            
        </div>
        <div class="col-md-3">
        <label for="ad" class="form-label">Email Address</label>
            <input type="text" class="form-control" id="ad" placeholder="Enter your email" name="ad" required>
            
            <div class="invalid-feedback">Please fill your email.</div>




            
        </div>
        <button class="btn btn-outline-info " type="submit"><i class="bi bi-box-arrow-in-right"></i>save</button>

  </div>
</div>
</div>
</main>

    






<?php
include("footer.php");
?>



</body>
</html>