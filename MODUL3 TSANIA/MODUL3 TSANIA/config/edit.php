<?php
require './konektor.php';

$id_mobil = $_GET['id'];
$nama_mobil = $_POST['namamobil'];
$nama_pemilik = $_POST['pemilikmobil'];
$merk_mobil = $_POST['merkmobil'];
$tanggal_beli = $_POST['tanggalbeli'];
$deskripsi = $_POST['desk'];
$status_pembayaran = $_POST['status'];
$foto_mobil = $_FILES['foto']['namamobil'];

$target = "../asset/images/";

if (move_uploaded_file($_FILES['foto']['tmp_name'], $target . $foto)) {
  $sql = "UPDATE showroom_tsania_table SET namamobil = '$nama_mobil', pemilikmobil = '$nama_pemilik', merkmobil = '$merk_mobil', tanggalbeli = '$tanggal_beli', desk = '$deskripsi', foto = '$foto_mobil', status_pembayaran = '$statuspembayaran' WHERE id_mobil = $id";
  if (mysqli_query($connection, $sql)) {
    header("location: ../pages/ListCar-Tsania.php");
  } else {
    echo "Error";
  }
} else {
  echo "Error";
}
