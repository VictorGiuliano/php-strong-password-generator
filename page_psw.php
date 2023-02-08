<?php
include 'function.php';
session_start();
if (empty($_SESSION['logged_in'])) {
    header('Location: index.php');
}
$password_length = $_SESSION['psw'];
?>
<h1>La psw è:</h1>
<p><?= $password_length ?></p>