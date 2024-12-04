<?php
// Termasuk file konfigurasi
include("../koneksi.php..");

// mengambil ID siswa dari parameter URL
$id = $_GET['dapertemen_id'];

// mengambil data siswa dari database berdasarkan ID
$query = $db->query("SELECT * FROM departemen WHERE dapertemen_id = '$id'");
$dapartemen = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Departemen</title>
</head>
<body>
    <h3>edit data departemen</h3>
    <form action="proses-edit.php" method="POST">
        <!-- Menyimpan ID untuk proses selanjutnya -->
        <input type="hidden" name="id" value="<?php echo $dapartemen['dapertemen_id']; ?>">
         <table border="0">
            <tr>
                <td>Nama Departemen</td>
                <td>
                <select name="nama_departemen" value="<?php echo $dapartemen['nama_departemen']; ?>">>
            <option value="design">Design</option>
            <option value="Enginer">Enginer</option>
            <option value="management">Management</option>
        </select>
                </td>
                </tr>
         </table>
         <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>