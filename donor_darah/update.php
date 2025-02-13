<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $golongan = $_POST['golongan'];
    $nomer_hp = $_POST['nomer_hp'];

    $sql = "UPDATE pendonor SET 
            nama='$nama', 
            alamat='$alamat', 
            tempat_lahir='$tempat_lahir',
            tanggal_lahir='$tanggal_lahir', 
            golongan_darah='$golongan', 
            nomer_hp='$nomer_hp' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: list.php");
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
