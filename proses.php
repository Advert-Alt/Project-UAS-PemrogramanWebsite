<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

// Koneksi database
$conn = new mysqli("localhost", "root", "", "beanscape");

// Cek ke database
$query = $conn->prepare("SELECT * FROM users WHERE email=? AND password=?");
$query->bind_param("ss", $email, $password);
$query->execute();

$result = $query->get_result();

if ($result->num_rows === 1) {
    $data = $result->fetch_assoc();

    $_SESSION['logged_in'] = true;
    $_SESSION['email'] = $data['email'];
    $_SESSION['role'] = $data['role']; // admin / user

    // Redirect berdasarkan role
    if ($data['role'] == "admin") {
        header("Location: admin.php");
    } else {
        header("Location: menu.php");
    }
    exit();
} else {
    echo "Login gagal!";
}
?>
