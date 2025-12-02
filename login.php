<?php
session_start();
$conn = new SQLite3('database.db');
$username = $_POST['username'];
$password = $_POST['password'];
$q = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$res = $conn->query($q);
if ($res->fetchArray()) {
    $_SESSION['logged']=true;
    header('Location: dashboard.php');
} else echo "Login failed";
?>
