<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

echo "Welcome " . $_SESSION['greeting'] . " " . $_SESSION['first_name'] . " " . $_SESSION['last_name'] . "!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Dashboard</h1>
        <p>This is your dashboard page.</p>
        <a href="logout.php" class="btn">Logout</a>
    </div>
</body>
</html>
