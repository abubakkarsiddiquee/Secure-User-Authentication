<?php
session_start();
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['last_name'] = $user['last_name'];
            $_SESSION['gender'] = $user['gender'];
            $_SESSION['greeting'] = ($user['gender'] == 'Male') ? 'Sir,' : 'Ma\'am,';

            header("Location: dashboard.php");
            exit();
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "Email not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form method="POST" action="login.php">
            <div class="input_field">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="input_field">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="input_field">
                <input type="submit" value="Login" class="btn">
            </div>
        </form>
    </div>
</body>
</html>
