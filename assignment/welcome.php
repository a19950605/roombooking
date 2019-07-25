<?php
session_start();

echo'Welcome'.$_SESSION["name"];

echo'<br><a href="logout.php">Logout</a>'; 
echo'<a href="bkrecord.php">record</a>'
?>
