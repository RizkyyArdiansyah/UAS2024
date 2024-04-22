<?php
session_start();
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "travel");

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil tugas dan lokasi dari form
$task = $_POST['task'];
$location = $_POST['location'];

// Tambahkan tugas dan lokasi ke database
$sql = "INSERT INTO tasks (task_name, location) VALUES ('$task', '$location')";
mysqli_query($conn, $sql);

// Redirect ke halaman utama
header("Location: index.php");
exit();
?>
