<?php
require './connector.php';

$nama_mobil = $_POST['nama_mobil'];
$pemilik_mobil = $_POST['pemilik_mobil'];
$merk_mobil = $_POST['merk_mobil'];
$tanggal_beli = $_POST['tanggal_beli'];
$deskripsi = $_POST['deskripsi'];
$status_pembayaran = $_POST['status_pembayaran'];
$foto_mobil = $_FILES['foto_mobil']['name'];

$target = "../asset/images/";

if (move_uploaded_file($_FILES['foto_mobil']['tmp_name'], $target . $foto_mobil)) {
  $sql = "INSERT INTO showroom_tsania_table (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$nama_mobil', '$pemilik_mobil', '$merk_mobil', '$tanggal_beli', '$deskripsi', '$foto_mobil', '$status_pembayaran')";
  if (mysqli_query($connector, $sql)) {
    header("location: ../pages/list-tsania.php");
  } else {
    echo "Error";
  }
} else {
  echo "Error";
}
