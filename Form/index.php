<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<?php

include("header.php");

?>
    
<div id="carouselExampleControls" class="carousel slide carousel carousel-dark slide"  data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="https://media.discordapp.net/attachments/622433942766878742/1004929091738275952/296376656_5869800119715281_9089159883879327477_n.jpg " class="d-block w-100" alt="..." width="100" height="700">
    </div>
    <div class="carousel-item">
    <img src="https://media.discordapp.net/attachments/622433942766878742/1004919129435799582/FB_IMG_1659661747169.jpg " class="d-block w-100" alt="..." width="100" height="700">
    </div>
    <div class="carousel-item">
    <img src="https://media.discordapp.net/attachments/622433942766878742/1004951914615685120/unknown.png " class="d-block w-100" alt="..." width="100" height="700">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<?php
include("footer.php");
?>



</body>
</html>