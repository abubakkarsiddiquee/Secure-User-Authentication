<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {

            echo "Login successful. Welcome " . $user['username'] . "!";
            
        } else {
            
            echo "Incorrect password.";
        }
    } else {
        
        echo "Email not found.";
    }
}
?>
