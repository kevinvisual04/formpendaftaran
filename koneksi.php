<?php
// Koneksi ke database
$koneksi = new mysqli("localhost", "username", "password", "form pendaftaran");

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}

// Ambil data dari formulir
$nama lengkap = $_POST['nama lengkap'];
$tempat lahir = $_POST['tempat lahir'];
$tgl lahir = $_POST['tgl lahir'];
$alamat = $_POST['alamat'];


// Simpan data ke database
$sql = "INSERT INTO users (nama lengkap, tempat lahir , tgl lahir, alamat) VALUES ('$username', '$email', '$password')";

if ($koneksi->query($sql) === TRUE) {
    echo "Pendaftaran berhasil!";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

// Tutup koneksi database
$koneksi->close();
?>
