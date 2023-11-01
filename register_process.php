<?php
include 'database/koneksi.php';

if ($con->connect_error) {
    die("Koneksi gagal: " . $con->connect_error);
}

$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$username = $no_hp;

$sql = "INSERT INTO users (nama, email, no_hp, username, password, group_id) VALUES ('$nama', '$email', '$no_hp', '$username', '$password', 3)";

if ($con->query($sql) === TRUE) {
    header("Location: dashboard.php");
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
