<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "roarfitness";

$conn = mysqli_connect($servername,$username,$password,$db);
if (!$conn) {
    die("connection error" . mysqli_connect_error()) ;
}
else{
    echo "connction successful";
}
$username = $_POST['Email'];  
$password = $_POST['Password'];  
  
    //to prevent from mysqli injection  
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($conn, $username);  
    $password = mysqli_real_escape_string($conn, $password);  
  
    $sql = "select *from userinfo where email = '$username' and password = '$password'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){
        echo "<h1><center> Login successful </center></h1>";
       header('Location:http://localhost/Roar%20Fitness%201/#home');
    }
    else{  
        echo "<h1> Login failed. Invalid username or password.</h1>";  
    }     
?>