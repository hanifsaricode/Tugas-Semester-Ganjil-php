<?php

session_start(); // Mulai sesi
include("../koneksi.php..");

// Periksa apakah tombol "simpan" pada form edit di tekan
if (isset($_POST['simpan'])) {
    // Ambil data dari form 
    $id = $_POST['dapertemen_id'];
    $nama_departemen = $_POST['nama_departemen'];
    
    // Buat query untuk memperbarui data siswa
    $sql = "UPDATE departemen SET
        nama_departemen = '$nama_departemen' 
        WHERE dapertemen_id = $id" ;

        $query = mysqli_query($db, $sql);
        // Simpan pesan notifikasi dalam sesi berdasarkan hasil query
        if ($query) {
            $_SESSION['notifikasi'] = "Data departemen berhasil diperbarui!";
        } else {
            $_SESSION['notifikasi'] = "Data departemen gagal diperbarui!";
}
// Alihkan ke halaman index.php
header("Location: index.php");
} else {
    // Jika akses langsung tanpa form, tampilkan pesan error
    die("Akses ditolak...");
}
?>