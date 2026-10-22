<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
$username=$_POST['username'];
$password=$_POST['password'];
$token=isset($_POST['token']) ? $_POST['token'] : '';

if($username== 'Sri' && $password=='106729152') {
    $_SESSION['user']=$username;
    header('Location: welcome.php');
    exit();
} else {
    echo"<p>Invalid login.<a href='login.php'> Try again</a></p>";
}
}else {
    header('Location: login.php');
    exit();
}
?>