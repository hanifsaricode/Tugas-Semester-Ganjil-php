<?php
// Termasuk file konfigurasi
include("../koneksi.php..");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data karyawan</title>
</head>
<body>
    <h3>Data karyawan</h3>
    <form action="proses-tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Nama karyawan</td>
                <td><input type="text" name="nama_karyawan" required></td>
            </tr>
            <tr>
                <td>Posisi</td>
                <td><input type="text" name="posisi" required></td>
            </tr>
            <tr>
                <td>Gaji</td>
                <td><input type="text" name="gaji"></td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>                       
</body>
</html>