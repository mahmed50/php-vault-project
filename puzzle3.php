<?php
session_start();
if ($_SESSION['level'] < 3) {
    header("Location: puzzle2.php");
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (strtolower(trim($_POST['answer'])) == "echo") {
        $_SESSION['level'] = 4;
        header("Location: success.php");
        exit;
    } else {
        $error = "Incorrect. Try again.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Puzzle 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Puzzle 3</h2>
        <p>I speak without a mouth and hear without ears. What am I?</p>
        <form method="post">
            <input type="text" name="answer" required />
            <button type="submit">Submit</button>
        </form>
        <p class="error"><?php if (isset($error)) echo $error; ?></p>
    </div>
</body>
</html>
