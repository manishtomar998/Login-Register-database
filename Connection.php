<?php      

// DataBase Connection

$con=mysqli_connect('localhost','root','','test','4306');
if($con->connect_error){
    die('Connection Failed :'.$con->connect_error);
}


    
?>  