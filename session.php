<?php
session_start();
if (!isset($_SESSION['level'])) {
    $_SESSION['level'] = 1;
}
?>
