<?php

// Koneksi ke database
$db = new mysqli("localhost", "root", "", "2106168_puput");

// Cek koneksi
if ($db->connect_error) {
  die("Koneksi gagal: " . $db->connect_error);
}

// Ambil data dari formulir
$posisi = $_POST["posisi"];
$nama = $_POST["nama"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$no_hp = $_POST["no_hp"];
$email = $_POST["email"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$agama = $_POST["agama"];
$alamat = $_POST["alamat"];

// Masukkan data ke dalam tabel
$query = "INSERT INTO pelamar (posisi, nama, tanggal_lahir, no_hp, email, jenis_kelamin, agama, alamat)
VALUES ('$posisi', '$nama', '$tanggal_lahir', '$no_hp', '$email', '$jenis_kelamin', '$agama', '$alamat')";

$result = $db->query($query);

// Cek hasil query
if ($result) {
  echo "Data berhasil disimpan";
} else {
  echo "Data gagal disimpan";
}

// Tutup koneksi
$db->close();
