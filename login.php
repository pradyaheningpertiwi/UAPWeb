<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Event Organizer</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header">
        <h1>Event Organizer</h1>
        <h2>Login</h2>
    </div>
    <div class="container">
        <form id="loginForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="email" id="email" name="email" placeholder="Email" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>
        <a href="index.php">Register</a>
    </div>
</body>
</html>
