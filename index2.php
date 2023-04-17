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

$name=$_POST['first_name'];
$lastname=$_POST['Last_name'];
$email=$_POST['email'];
$phone=$_POST['phone_no'];
$sql="INSERT INTO `new_data` (`name`, `lastname`, `email`, `phone`) VALUES ('$name', '$lastname', '$email', '$phone');";
if($conn->query($sql)==true){
    echo "<h1> Sucessfully Registered</h1>";
}
else{
    echo "ERROR: $sql <br> $conn->error";
}
$conn->close();
?>