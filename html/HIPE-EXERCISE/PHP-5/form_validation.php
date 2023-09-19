<!DOCTYPE html>
<html>
<head>
    <title>Simple Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>

    <?php
    // Hardcoded username and password
    $validUsername = 'username';
    $validPassword = 'password';

    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the submitted username and password
        $enteredUsername = $_POST['username'];
        $enteredPassword = $_POST['password'];

        // Check if the entered username and password match the hardcoded values
        if ($enteredUsername === $validUsername && $enteredPassword === $validPassword) {
            // Login successful
            echo '<h3>Login Successful</h3>';
        } else {
            // Login failed
            echo '<h3>Login Failed. Invalid Username or Password. Please try again.</h3>';
        }
    }
    ?>
</body>
</html>
