<?php

$servername= "localhost"; //Hosting /127.0.0.1//

$username ="root";// user database

$password="";//

$dbname = "db_basic_php"; //database name

//create connetion

$conection =new mysqli($servername, $username ,$password ,$dbname);

$conection -> Set_charset("utf8");




/* test



// Check connection
if ($conection->connect_error) {
    die("Connection failed: " . $conection->connect_error);
  }
  else{
  echo "Connnect Successfully!";
  }
  

*/


?>