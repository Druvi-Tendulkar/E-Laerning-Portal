<?php

session_start();

$con = mysqli_connect('localhost:3307', 'root');

mysqli_select_db($con, 'wtproject');

$username = $_POST['username'];
$password = $_POST['password'];

$q = "SELECT * FROM register WHERE username = '$username' AND  password = '$password'";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $username;  //store username in session 
    // echo $_SESSION['username'];
    header('location: mainpage.php');
}
else{
    echo "login failed!! Check username and password";
}

?>

