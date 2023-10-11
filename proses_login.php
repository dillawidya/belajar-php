<?php
// Set username dan password statis
$valid_username = "username";
$valid_password = "password";

// Ambil input dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Cek apakah autentikasi berhasil
if ($username == $valid_username && $password == $valid_password) {
    // Jika berhasil, redirect ke dashboard.php
    header("Location: dashboard.php");
    exit();
} else {
    // Jika gagal, kembali ke halaman login
    header("Location: login.php");
    exit();
}
?>

