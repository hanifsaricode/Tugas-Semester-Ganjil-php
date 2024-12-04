<?php
// Termasuk file konfigurasi
include("../koneksi.php..");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data departemen</title>
</head>
<body>
    <h3>Data departemen</h3>
    <form action="proses-tambah.php" method="POST">
        <select name="nama_departemen" id="">
            <option value="design">Design</option>
            <option value="Enginer">Enginer</option>
            <option value="management">Management</option>
        </select>
        <button type="submit" name="simpan">Simpan</button>
    </form>                       
</body>
</html>