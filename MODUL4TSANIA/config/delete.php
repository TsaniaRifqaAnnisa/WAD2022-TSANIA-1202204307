  <?php
  require 'connector.php';

  $id = $_GET['id'];

  $mysql = "DELETE FROM showroom_tsania_table WHERE id_mobil = $id";

  if (mysqli_query($conn, $mysql)) {
    header("location: ../pages/ListCar-Tsania.php?message=delete");
  } else {
    echo "Gagal";
  }
  ?>