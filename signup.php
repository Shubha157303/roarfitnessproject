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

$name1 = $_POST['FirstName'];
$name2 = $_POST['LastName'];
$email = $_POST['Email'];
$password1 = $_POST['password'];

$query = "Insert into userinfo(firstname,lastname,email,password) values('$name1','$name2','$email','$password1')";

if (mysqli_query($conn,$query)) {
    echo "data insert successfully";
}
else {
    echo "fail";
}
mysqli_close($conn);
?>