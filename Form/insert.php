<html>
<body>

<?php 

include("config.inc.php");

;
echo $_POST["fname"];
 
echo $_POST["name"]; 
echo "<br>";
echo $_POST["lname"]; 
echo"<br>";
echo $_POST["BD"]; 
echo"<br>";
echo $_POST["SEX"]; 
echo"<br>";
echo $_POST["ad"]; 
echo"<br>";
echo $_POST["Email"]; 
echo"<br>";
echo $_POST["PN"]; 


$firstname = $_POST['name'];
$middlename = $_POST['fname'];
$lastname = $_POST['lname'];
$sex = $_POST['SEX'];
$birthdate = $_POST['BD'];
$address = $_POST['ad'];
$tel = $_POST['PN'];
$email = $_POST['Email'];

?>
<br>
<?php

$sql = "INSERT INTO tbl_member (id, FirstName, name, Lastname, sex, Birthday, phone , email , address )
        VALUES ('', '$firstname', '$middlename', '$lastname', '$sex', '$birthdate', '$tel','$email','$address')";

if(mysqli_query($conection, $sql)) {
    echo"<br>";
    echo "เพิ่มข้อมูลสำเร็จ";
}else{
    echo"<br>";
    echo "เพิ่มข้อมูลไม่สำเร็จ";
}
$conection -> close();



?>
</body>
</html>