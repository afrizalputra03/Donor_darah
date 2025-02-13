<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $golongan = $_POST['golongan'];
    $nomer_hp = $_POST['nomer_hp'];

    $sql = "INSERT INTO pendonor (nama, alamat, tempat_lahir, tanggal_lahir, golongan_darah, nomer_hp)
            VALUES ('$nama', '$alamat', '$tempat_lahir', '$tanggal_lahir', '$golongan', '$nomer_hp')";

    if ($conn->query($sql) === TRUE) {
        header("Location: list.php");
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
