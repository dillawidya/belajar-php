<?php
session_start();

include 'database/koneksi.php';


if ($con->connect_error) {
    die("Koneksi gagal: " . $con->connect_error);
}

$no_hp = $_POST['no_hp'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE no_hp='$no_hp' AND group_id=3";
$result = $con->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['logged_in'] = true;
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        header("Location: dashboard.php");
        exit();
    }
}

header("Location: login.php");
exit();

$con->close();
?>