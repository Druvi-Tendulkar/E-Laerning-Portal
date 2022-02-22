<?php

session_start();
$con = mysqli_connect('localhost:3307', 'root');

mysqli_select_db($con, 'wtproject');

$username = $_POST['username'];
$email = $_POST['email'];
$phoneno = $_POST['number'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$q = "SELECT * FROM register WHERE username = '$username' OR  email = '$email'";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "This Username or emailID already exists!!";
}
else{
    if($_POST['password'] == $_POST['confirm_password']){
        // echo $username;
        // echo $email;
        // echo $phoneno;
        // echo $password;
        // echo $confirm_password;
        // echo "Success";
        $qy = "INSERT INTO register(username, email, number, password, confirm_password) VALUES ('$username', '$email', '$phoneno', '$password', '$confirm_password')";
        mysqli_query($con, $qy);
        header('location: login.html');
    }
    else{
        echo "confirm password failed!! Enter same password in the confirm password field";
    }   
}

?>