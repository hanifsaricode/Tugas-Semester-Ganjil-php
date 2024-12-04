<?php
// Termasuk file konfigurasi
include("../koneksi.php..");

// mengambil ID siswa dari parameter URL
$id = $_GET['karyawan_id'];

// mengambil data siswa dari database berdasarkan ID
$query = $db->query("SELECT * FROM karyawan WHERE karyawan_id = '$id'");
$karyawan = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
</head>
<body>
    <h3>edit data karyawan</h3>
    <form action="proses-edit.php" method="POST">
        <!-- Menyimpan ID untuk proses selanjutnya -->
        <input type="hidden" name="id" value="<?php echo $karyawan['karyawan_id']; ?>">
         <table border="0">
            <tr>
                <td>Nama Karyawan</td>
                <td>
                    <input type="text" name="nama_karyawan"
                    value="<?php echo $karyawan['nama_karyawan']; ?>" required>
                </td>
                </tr>
                <tr>
                    <td>Posisi</td>
                    <td>
                        <input type="text" name="posisi"
                        value="<?php echo $karyawan['posisi']; ?>" required>
                    </td>
                    </tr>
                    <tr>
                        <td>Gaji</td>
                        <td>
                            <input type="text" name="gaji"
                            value="<?php echo $karyawan['gaji']; ?>">
                        </td>
                    </tr>
         </table>
         <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>