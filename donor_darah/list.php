<?php include 'header.php'; ?>
<?php include 'config.php'; ?>

<?php
$search = "";
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM pendonor WHERE nama LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM pendonor";
}

$result = $conn->query($sql);
?>

<div class="container">
    <div class="table-container">
        <h2>Daftar Pendonor</h2>

        <!-- Form Pencarian -->
        <div class="search-container">
        <form method="GET" action="list.php" class="search-form">
            <input type="text" name="search" placeholder="Cari nama pendonor..." value="<?= htmlspecialchars($search) ?>">
            <button type="submit">Cari</button>
        </form>
        </div>

        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Umur</th>
                <th>Golongan Darah</th>
                <th>Nomor HP</th>
                <th>Aksi</th>
            </tr>
            <?php 
            $no = 1;
            while ($row = $result->fetch_assoc()) {
                $tanggal_lahir = new DateTime($row['tanggal_lahir']);
                $hari_ini = new DateTime();
                $umur = $hari_ini->diff($tanggal_lahir)->y;

                echo "<tr>
                <td>{$no}</td>
                <td>{$row['nama']}</td>
                <td>{$row['alamat']}</td>
                <td>{$row['tempat_lahir']}</td> 
                <td>{$row['tanggal_lahir']}</td>
                <td>{$umur} tahun</td>
                <td>{$row['golongan_darah']}</td>
                <td>{$row['nomer_hp']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}' class='btn-edit'>Edit</a>
                    <a href='delete.php?id={$row['id']}' class='btn-delete' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>
                </td>
                </tr>";
                $no++;
            }
            ?>
        </table>
    </div>
</div>

</body>
</html>
