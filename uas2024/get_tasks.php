<?php
session_start();
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "travel");

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil tugas dan lokasi dari database
$sql = "SELECT * FROM tasks";
$result = mysqli_query($conn, $sql);

// Tampilkan tugas dan lokasi
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $task_id = $row["id"];
        $task_name = $row["task_name"];
        $location = $row["location"];
        echo "<li class='task-item'>" . $task_name . " - " . $location . "
              <form action='edit_task.php' method='POST'>
                  <input type='hidden' name='task_id' value='$task_id'>
                  <input type='text' name='updated_task' value='$task_name'>
                  <input type='text' name='updated_location' value='$location'>
                  <button type='submit'>Edit</button>
              </form>
              <form action='delete_task.php' method='POST'>
                  <input type='hidden' name='task_id' value='$task_id'>
                  <button type='submit'>Delete</button>
              </form>
              </li>";
    }
} else {
    echo "Tidak ada planning.";
}

// Tutup koneksi
mysqli_close($conn);
?>
