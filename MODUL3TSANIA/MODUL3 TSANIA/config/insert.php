<?php
require './konektor.php';

$namamobil = $_POST['namamobil'];
$pemilikmobil = $_POST['pemilikmobil'];
$merkmobil = $_POST['merkmobil'];
$tanggalbeli = $_POST['tanggalbeli'];
$deskripsi = $_POST['desk'];
$status = $_POST['status'];
$fotomobil = $_FILES['foto']['namamobil'];

$target = "../asset/images/";


if (move_uploaded_file($_FILES['foto']['tmp_name'], $target . $fotomobil)) {
  $sql = "INSERT INTO showroom_tsania_table (namamobil, namapemilik, merkmobil, tanggalbeli, deskripsi, fotomobil, statuspembayaran) 
  VALUES ('$namamobil', '$pemilikmobil', '$merkmobil', '$tanggalbeli', '$deskripsi', '$fotomobil', '$status')";
  if (mysqli_query($conn, $sql)) {
    header("location: ../pages/ListCar-Tsania.php");
  } else {
    echo "Error";
  }
} else {
  echo "Error";
}
