<?php      
    include('Connection.php');  
    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
        $sql = "select *from login where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);   
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  