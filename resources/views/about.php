<?php 
    $con = mysqli_connect('localhost','root');

    if($con) {
        echo"Connection Successful";
    }
    else{
        echo "Connection Failed";
    }
    mysqli_select_db($con,'photography');
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (email,password) VALUES ('$email','$password')";
    
    mysqli_query($con,$query);
    header("location:index.php#Contact");
    
?>