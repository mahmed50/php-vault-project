<?php
session_start();
if ($_SESSION['level'] < 4) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Congratulations!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>🎉 You Escaped the PHP Vault!</h1>
        <p>Great job solving all the puzzles!</p>
        <a class="btn" href="index.php">Play Again</a>
    </div>
</body>
</html>
