<?php 
include "connection.php";
if (!$con) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $countryCode = $_POST['country_code'];
    $phoneNumber = $_POST['phone_number'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
     $sql = "INSERT INTO users (first_name, last_name, age, gender, country_code, phone_number, email, username, password)

     VALUES ('$firstName', '$lastName', '$age', '$gender', '$countryCode', '$phoneNumber', '$email', '$username', '$hashedPassword')";
     if ($con->query($sql) === TRUE) {

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con) . "<br>";
    }
}


?>