<?php
require './connector.php';

$id_mobil = $_GET['id'];
$nama_mobil = $_POST['nama_mobil'];
$nama_pemilik = $_POST['pemilik_mobil'];
$merk_mobil = $_POST['merk_mobil'];
$tanggal_beli = $_POST['tanggal_beli'];
$deskripsi = $_POST['deskripsi'];
$status_pembayaran = $_POST['status_pembayaran'];
$foto_mobil = $_FILES['foto_mobil']['name'];

$target = "../asset/images/";

if (move_uploaded_file($_FILES['foto_mobil']['tmp_name'], $target . $foto_mobil)) {
  $sql = "UPDATE showroom_tsania_table SET nama_mobil = '$nama_mobil', pemilik_mobil = '$nama_pemilik', merk_mobil = '$merk_mobil', tanggal_beli = '$tanggal_beli', deskripsi = '$deskripsi', foto_mobil = '$foto_mobil', status_pembayaran = '$status_pembayaran' WHERE id_mobil = $id_mobil";
  if (mysqli_query($connect, $sql)) {
    header("location: ../pages/list-tsania.php");
  } else {
    echo "Error";
  }
} else {
  echo "Error";
}
