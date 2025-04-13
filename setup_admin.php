<?php
include 'config/koneksi.php';

// Cek apakah akun admin sudah ada
$query = "SELECT * FROM user WHERE username = 'admin'";
$result = $koneksi->query($query);

if ($result->num_rows == 0) {
    // Jika tidak ada, buat akun admin dengan password yang sudah di-hash
    $adminPassword = password_hash('admin', PASSWORD_DEFAULT);
    $insertQuery = "INSERT INTO user (username, password, role) VALUES ('admin', '$adminPassword', 'admin')";

    if ($conn->query($insertQuery)) {
        echo "Akun admin berhasil dibuat.";
    } else {
        echo "Gagal membuat akun admin: " . $conn->error;
    }
} else {
    echo "Akun admin sudah ada.";
}
?>