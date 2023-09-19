<!DOCTYPE html>
<html>
<head>
    <title>Simple Contact Form</title>
</head>
<body>
    <h2>Contact Us</h2>
    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="35" required></textarea><br><br>
        
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        echo "<br><br>" . "<h3>Submission completed. Thank you!</h3>";
        echo "<p>" . "Name:" . $name . "</p>";
        echo "<p>" . "Email:" . $email . "</p>";
        echo "<p>" . "Message:" . $message . "</p>";
    }
    ?>
</body>
</html>
