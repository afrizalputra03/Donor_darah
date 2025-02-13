<?php include 'header.php'; ?>

<h2>Form Pendaftaran Donor Darah</h2>

<div class="form-container">
    <form action="process.php" method="post">
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" required>
        </div>

        <div class="form-group">
            <label>Alamat:</label>
            <input type="text" name="alamat" required>
        </div>

        <div class="form-group">
            <label>Tempat Lahir:</label>
            <input type="text" name="tempat_lahir" required>
        </div>
        
        <div class="form-group">
            <label>Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" required>
        </div>

        <div class="form-group">
            <label>Golongan Darah:</label>
            <select name="golongan" required>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>
        </div>

        <div class="form-group">
            <label>Nomor HP:</label>
            <input type="number" name="nomer_hp" required oninput="this.value = this.value.replace(/[^0-9]/g, '')">
        </div>

        <button type="submit">Daftar</button>
    </form>
</div>

</body>
</html>
