<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="body">
    <div class="container">
        <div class="title">Registration Form</div>
        <form action="action.php" method="POST" class="form">
        
            <div class="input_field">
                <label for="first_name">First name</label>
                <input type="text" id="first_name" name="first_name" class="input" required>
            </div>

            <div class="input_field">
                <label for="last_name">Last name</label>
                <input type="text" id="last_name" name="last_name" class="input" required>
            </div>

            <div class="input_field">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" class="input" required>
            </div>

            <div class="input_field">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" class="select" required>
                    <option value="" disabled selected>Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="input_field">
                <label for="country_code">Phone Number</label>
                <select id="country_code" name="country_code" class="country_code" required>
                    <option value="" disabled selected>Select Country</option>
                    <option value="+93" data-country="af">🇦🇫 Afghanistan (+93)</option>
                    <option value="+880" data-country="bd">🇧🇩 Bangladesh (+880)</option>
                    <option value="+975" data-country="bt">🇧🇹 Bhutan (+975)</option>
                    <option value="+91" data-country="in">🇮🇳 India (+91)</option>
                    <option value="+960" data-country="mv">🇲🇻 Maldives (+960)</option>
                    <option value="+977" data-country="np">🇳🇵 Nepal (+977)</option>
                    <option value="+92" data-country="pk">🇵🇰 Pakistan (+92)</option>
                    <option value="+94" data-country="lk">🇱🇰 Sri Lanka (+94)</option>
                </select>
                <input type="text" id="phone_number" name="phone_number" class="input" required>
            </div>

            <div class="input_field">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="input" required>
            </div>

            <div class="input_field">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="input" required>
            </div>

            <div class="input_field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="input" required>
            </div>

            <div class="input_field">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" class="input" required>
            </div>

            <div class="input_field">
                <input type="submit" value="Register" class="btn">
            </div>
        </form>
    </div>
</body>
</html>
