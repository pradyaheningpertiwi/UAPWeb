<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Event Organizer</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">
    <h1>Event Organizer</h1>

    <h2>Login</h2>
    <form id="loginForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="email" id="email" name="email" placeholder="Email" required>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
    </form>
    <a style="background-color:#007BFF; color:white; width: 46%;position:absolute;padding:10px;text-align:center;text-decoration:none;border-radius:4px;"href="index.php">loginForm</a>
</div>

</body>
</html>
