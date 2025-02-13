<?php
include 'config.php';
include 'header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM pendonor WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
} else {
    echo "ID tidak ditemukan!";
    exit;
}
?>

<div class="container">
    <h2>Edit Data Pendonor</h2>
    <div class="form-container">
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required>
            </div>

            <div class="form-group">
                <label>Alamat:</label>
                <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" required>
            </div>

            <div class="form-group">
                <label>Tempat Lahir:</label>
                <input type="text" name="tempat_lahir" value="<?php echo $row['tempat_lahir']; ?>" required>
            </div>

            <div class="form-group">
                <label>Tanggal Lahir:</label>
                <input type="date" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>" required>
            </div>

            <div class="form-group">
                <label>Golongan Darah:</label>
                <select name="golongan" required>
                    <option value="A" <?php if ($row['golongan_darah'] == 'A') echo "selected"; ?>>A</option>
                    <option value="B" <?php if ($row['golongan_darah'] == 'B') echo "selected"; ?>>B</option>
                    <option value="AB" <?php if ($row['golongan_darah'] == 'AB') echo "selected"; ?>>AB</option>
                    <option value="O" <?php if ($row['golongan_darah'] == 'O') echo "selected"; ?>>O</option>
                </select>
            </div>

            <div class="form-group">
                <label>Nomor HP:</label>
                <input type="text" name="nomer_hp" value="<?php echo $row['nomer_hp']; ?>" required 
                       oninput="this.value = this.value.replace(/[^0-9]/g, '')">
            </div>

            <button type="submit">Update</button>
        </form>
    </div>
</div>

</body>
</html>
