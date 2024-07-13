<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body class="body">
    <div class="container">
        <div class="title">Login</div>
        <form action="login_action.php" method="POST" class="form">

            <div class="input_field">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="input" required>
            </div>

            <div class="input_field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="input" required>
            </div>

            <div class="input_field">
                <input type="submit" value="Login" class="btn">
            </div>
        </form>
    </div>
</body>
</html>
