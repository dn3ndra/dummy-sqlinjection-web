<?php
session_start();
if (!isset($_SESSION['logged'])) header('Location: index.php');
echo "<h1>FLAG{S3cul4b_sql_dummy}</h1>";
?>
