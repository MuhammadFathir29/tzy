<?php
session_start();
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "SELECT * FROM user WHERE username = ?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();


        if ($password == $user['password']) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            header('location: ../pages/dashboard.php');
            exit(); // Hindari eksekusi lanjutan
        } else {
            echo "Invalid username or password";
        }
    } else {
        echo "Invalid username or password";
    }
}
?>