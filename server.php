<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'web29';


$con = mysqli_connect($servername, $username, $password, $dbname);


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);


    $query = "INSERT INTO `user` (`id`, `email`, `password`) VALUES (NULL, '$email', '$hashed_password')";
    

    if (mysqli_query($con, $query)) {
        echo "User created";
    } else {
        echo "Error: " . mysqli_error($con);  
    }
}
mysqli_close($con);
?>
