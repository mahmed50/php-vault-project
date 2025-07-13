<?php
session_start();
session_destroy();
session_start();
$_SESSION['level'] = 1;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to the PHP Vault</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to the PHP Vault</h1>
        <p>Can you escape all 3 rooms by solving simple puzzles?</p>
        <a href="puzzle1.php" class="btn">Start Game</a>
    </div>
</body>
</html>
