<?php
include 'Database.php';
include 'User.php';

$db = new Database();
$user = new User($db->conn);

$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$password = $_POST['password'];

if ($user->register($nama, $email, $no_hp, $password)) {
    echo "Registrasi berhasil!";
} else {
    echo "Registrasi gagal.";
}
?>
