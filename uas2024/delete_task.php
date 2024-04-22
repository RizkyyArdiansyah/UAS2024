<?php
session_start();
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "travel");

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil task_id dari form
$task_id = $_POST['task_id'];

// Hapus tugas dari database
$sql = "DELETE FROM tasks WHERE id='$task_id'";
mysqli_query($conn, $sql);

// Redirect ke halaman utama
header("Location: index.php");
exit();
?>
