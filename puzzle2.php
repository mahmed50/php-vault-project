<?php
session_start();
if ($_SESSION['level'] < 2) {
    header("Location: puzzle1.php");
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (strtolower(trim($_POST['answer'])) == "chair") {
        $_SESSION['level'] = 3;
        header("Location: puzzle3.php");
        exit;
    } else {
        $error = "Incorrect. Try again.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Puzzle 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Puzzle 2</h2>
        <p>Unscramble this: <strong>EADRC</strong> (Hint: it's something you sit on)</p>
        <form method="post">
            <input type="text" name="answer" required />
            <button type="submit">Submit</button>
        </form>
        <p class="error"><?php if (isset($error)) echo $error; ?></p>
    </div>
</body>
</html>
