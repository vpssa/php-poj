<?php
$servername="localhost";
$username="root";
$password="";
$database="first_base";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("sorry connection is failed : ". mysqli_connect_error());
}
else echo " connection stablished <br>";


$phone=$_POST['phone'];
$new_nam=$_POST['corr_name'];
$new_last_nam=$_POST['corr_last_name'];
$new_email=$_POST['corr_email'];

$sqlo="UPDATE `new_data` SET `name` = '$new_nam', `lastname` = '$new_last_nam', `email` = '$new_email' WHERE `new_data`.`phone` = $phone;";
if($conn->query($sqlo)==true){
    echo "<h1>sucessfully inserted</h1>";
}
$conn->close();
?>