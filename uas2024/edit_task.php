<?php
session_start();
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "travel");

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari form
$task_id = $_POST['task_id'];
$updated_task = $_POST['updated_task'];
$updated_location = $_POST['updated_location'];

// Perbarui tugas dan lokasi di database
$sql = "UPDATE tasks SET task_name='$updated_task', location='$updated_location' WHERE id='$task_id'";
mysqli_query($conn, $sql);

// Redirect ke halaman utama
header("Location: index.php");
exit();
?>
