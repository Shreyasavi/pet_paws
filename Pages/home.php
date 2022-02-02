<?php
session_start();

if(!$_SESSION['oname'])
{

    header("Location: index.php");//redirect to the login page to secure the welcome page without login access.
}
?>

<!DOCTYPE html>
<!--Code by Divinector (www.divinectorweb.com)-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style-home.css">
</head>
<body>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<header>
    <div class = 'log-icon'>
        <a href="../logout.php">
            <i class="fas fa-sign-out-alt" title="Log out" style="font-size: 1.5em;"></i>
        </a>
    </div>
    <div class="welcome-text">
        <div class="welcome-name">
            <h1>
                Welcome
            </h1>
            <h1 class ="name">
                to
            </h1>
            <h1 class="name">
                Pet Paws
            </h1>
            <a href="appoint.php">Book appointments</a>
            <a href="buy.php">Buy products</a>
        </div>
    </div>
</header>

</body>
</html>