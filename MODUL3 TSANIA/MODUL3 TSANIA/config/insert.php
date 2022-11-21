<?php
require './connector.php';

$nama_mobil = $_POST['namamobil'];
$nama_pemilik = $_POST['pemilikmobil'];
$merk_mobil = $_POST['merkmobil'];
$tanggal_beli = $_POST['tanggalbeli'];
$deskripsi = $_POST['desk'];
$status_pembayaran = $_POST['status'];
$foto_mobil = $_FILES['foto']['namamobil'];

$target = "../asset/images/";

if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $foto_mobil)) {
  $sql = "INSERT INTO showroom_tsania_table (nama_mobil, nama_pemilik, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$nama_mobil', '$pemilik_mobil', '$merk_mobil', '$tanggal_beli', '$deskripsi', '$foto_mobil', '$status_pembayaran')";
  if (mysqli_query($conn, $sql)) {
    header("location: ../pages/ListCar-Tsania.php");
  } else {
    echo "Error";
  }
} else {
  echo "Error";
}
