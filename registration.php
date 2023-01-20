<?php
include('Connection.php');
$name=$_POST['name'];
$email=$_POST['regEmail'];
$password=$_POST['regPassword'];
$address=$_POST['address'];
$phone=$_POST['phone'];


$sql = "insert into login (name,email,password,address,phone) values ('$name','$email','$password','$address','$phone')";
$result = mysqli_query($con, $sql);   

if($result){  
    echo "<h1><center> Record added </center></h1>";  
} 

?>