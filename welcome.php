<?php
session_start();

include("header.inc");

if(isset($_SESSION['user'])){
    echo "<h2>Welcome, " . $_SESSION['user'] . "</h2>";
} else {
    header('Location: login.php');
    exit();
}

include("footer.inc");
?>