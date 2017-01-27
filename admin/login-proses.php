<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "admin"){
    $_SESSION['username'] = $username;
    header("Location: index.php");
} else {
    echo '<h1>Username atau Kata Sandi Salah!</h1>';
    echo '<a href="login.php">Kembali</a>';
}

?>
