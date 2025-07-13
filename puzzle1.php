<?php
session_start();
if ($_SESSION['level'] < 1) {
    header("Location: index.php");
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (trim($_POST['answer']) == "13") {
        $_SESSION['level'] = 2;
        header("Location: puzzle2.php");
        exit;
    } else {
        $error = "Incorrect. Try again.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Puzzle 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Puzzle 1</h2>
        <p>What is 7 + 6?</p>
        <form method="post">
            <input type="text" name="answer" required />
            <button type="submit">Submit</button>
        </form>
        <p class="error"><?php if (isset($error)) echo $error; ?></p>
    </div>
</body>
</html>
