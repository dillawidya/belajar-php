<?php
include 'Database.php';
include 'User.php';

$db = new Database();
$conn = $db->getConnection();

$user = new User($conn);

$no_hp = $_POST['no_hp'];
$password = $_POST['password'];

$user_data = $user->login($no_hp, $password);

if ($user_data) {
    session_start();
    $_SESSION['user'] = $user_data;
    header("Location: Roop.php"); // Redirect ke halaman dashboard setelah login
} else {
    echo "Login gagal. Silakan coba lagi.";
}

$db->closeConnection();
?>
