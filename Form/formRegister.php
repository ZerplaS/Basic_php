<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>formregis</title>
</head>

<body>
  <?php
  include("header.php");
  
  ?>
  <main>
    <div class="container">
      <div class="card">
        <div class="card-header">
          RegisterForm
        </div>
        <div class="card-body">
          <form name="formRegis" action="insert.php" method="post">
            <div class="row">
              <!--row1-->
              <div class="col-md-4">
                <label class="form-label">Firstname</label>
                <select class="form-select" id="fname" name="fname" aria-label="Default select example">
                  <option value="Mr.">Mr.</option>
                  <option value="Ms.">Ms.</option>
                  <option value="Mrs.">Mrs.</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your Name">
              </div>
              <div class="col-md-4">
                <label for="lname" class="form-label">Lastname</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your Lastname" name="lname">
              </div>
            </div>
            <div class="row">
              <!--row2-->
              <div class="col-md-3">
                <label for="SEX" class="form-label">Sex</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="SEX" id="SEX" value="male"  checked >
                  <label class="form-check-label" for=""> 
                    Male
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="SEX" value="Women" id="SEX">
                  <label class="form-check-label" for="">
                    Female
                  </label>
                </div>
              </div>
              <div class="col-md-3">
                <label for="date" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="BD" placeholder="dd/mm/yyyy" name="BD">
              </div>
              
              <div class="col-md-6">
                <label for="ad" class="form-label">Address</label>
                <input type="text" class="form-control" id="ad" placeholder="Enter your Address" name="ad">
              </div>

              <div class="col-md-6">
                <label for="ad" class="form-label">PhoneNumber</label>
                <input type="number" class="form-control" id="PN" placeholder="Enter PhoneNumber" name="PN">
              </div>

              <div class="col-md-6">
                <label for="ad" class="form-label">Email</label>
                <input type="email " class="form-control" id="Email" placeholder="Enter Email" name="Email">
              </div>
              
            </div>
            <br>
            <div class="col-md-6">
            <input type="submit" href="insert.php" class="btn btn-success btn-primary">
            </div><br>
            <div class="col-md-6">
            <input type="reset" href="formRegister.php" class="btn btn-success btn-danger">
            
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </main>
  <?php
  include("footer.php");
  ?>
</body>

</html>