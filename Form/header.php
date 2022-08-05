<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <!--font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,900&family=Prompt:wght@600&family=Taviraj:ital,wght@1,700&display=swap" rel="stylesheet">

<style type="text/css">
body{
font-family: 'Kanit', sans-serif;
font-family: 'Prompt', sans-serif;
font-family: 'Taviraj', serif;
}
</style>
<!--icon-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
   <!--Nav-->
    <nav class="navbar navbar-expand-lg bg-Light ">
  <div class="container-fluid">
    <a class="navbar-brand text-info" href="index.php"><i class="bi bi-vinyl-fill"></i> Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-warning " aria-current="page" href="index.php" ><i class="bi bi-activity"></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-warning" href="formRegister.php" ><i class="bi bi-aspect-ratio"></i>Register</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-warning" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"><i class="bi bi-arrow-down-circle-fill"></i>Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
          
        </li>
        <li class="nav-item">
          <a class="nav-link disabled text-warning">Disabled <i class="bi bi-badge-4k-fill"></i></a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        
        <button class="btn btn-outline-info " type="submit"><i class="bi bi-box-arrow-in-right"></i>Login</button>
      </form>
    </div>
  </div>
</nav>
  
  
  
  
  </body>
</html>