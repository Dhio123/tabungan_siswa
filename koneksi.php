<?php

$hostname = "localhost";
$database = "tabungan_siswa";
$username = "root";
$password = "";
$kon = mysqli_connect($hostname, $username, $password, $database);

function get_rupiah($angka)
{
    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
}

// script cek koneksi
if (!$kon) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}
