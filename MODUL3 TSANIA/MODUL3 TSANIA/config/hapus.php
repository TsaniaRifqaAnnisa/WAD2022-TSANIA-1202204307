<?php
require './konector.php';

$id = $_GET['id'];

$mysql = "DELETE FROM showroom_tsania_table WHERE id_mobil = $id";

if (mysqli_query($connect, $mysql)) {
  header("location: ../pages/ListCar-Tsania.php?pesan=hapus");
} else {
  echo "Error";
}
