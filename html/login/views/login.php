<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" type="text/css" href="../public/style.css">
    </head>
    <body>
        <form action="../controllers/auth.php" method="post">
            <h2>LOGIN</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?= $_GET['error']; ?></p>
            <?php } ?>
            <label>Username</label>
            <input type="text" name="username" placeholder="Username"><br>

            <label>Password</label>
            <input type="Password" name="password" placeholder="Password"><br>

            <button type="submit">Login</button>
        </form>
    </body>
</html>
