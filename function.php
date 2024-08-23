<?php
$servername = "localhost"; // Sesuaikan dengan server Anda
$username = "root"; // Username default untuk XAMPP
$password = ""; // Password default untuk XAMPP
$dbname = "pio";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
