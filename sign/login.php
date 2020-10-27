<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <div class="header">
        <h2 class="">Login</h2>
    </div>

    <form method="post" action="login.php" class="">

    <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>

        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>

        <p>
            Don't have an account? <a href="register.php">Sign up</a>
       </p>



    </form>

</body>
</html>