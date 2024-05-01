<?php
$host = 'localhost'; // Nama host
$user = 'root'; // Nama pengguna database
$password = ''; // Kata sandi pengguna database
$database = 'jwd_pelatihan'; // Nama database yang akan dihubungkan

// Membuat koneksi
$koneksi = new mysqli($host, $user, $password, $database);

// Memeriksa apakah koneksi berhasil
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}
?>
