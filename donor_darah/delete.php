<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM pendonor WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dihapus! <a href='index.php'>Kembali</a>";
    } else {
        echo "Gagal menghapus data: " . $conn->error;
    }
}

$conn->close();
?>
