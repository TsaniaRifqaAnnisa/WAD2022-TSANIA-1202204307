<?php
require '../config/connector.php';

$id = $_GET['id'];

$sql = "SELECT * FROM showroom_tsania_table WHERE id_mobil = $id";

$hasil = mysqli_query($connect, $sql);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ItemDetail</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include '../asset/style/style.css'; ?>
  </style>
</head>

<body>
  <!-- Nav -->
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav gap-3">
          <a class="nav-link" href="../index.php">Home</a>
          <a class="nav-link" style="color: white;" href="#">MyCar</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Nav End -->

  <!-- Form -->
  <section id='detail'>
    <div class="container">
      <?php
      while ($getDetail = mysqli_fetch_array($hasil)) {
        echo "
                <h1 class='add1'>" . $getDetail["nama_mobil"] . "</h1>
                <p class='addn'>Detail Mobil " . $getDetail["nama_mobil"] . "</p>
                <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
                  <img src='../asset/images/" . $getDetail["foto_mobil"] . "' alt='foto_mobil'>
                  <form action='' enctype='multipart/form-data'>
                    <label for='nama'>Nama Mobil</label>
                    <input type='text' id='nama_mobil' name='nama_mobil' value='" . $getDetail["nama_mobil"] . "' readonly>
                    <label for='pemilik_mobil'>Nama Pemilik</label>
                    <input type='text' id='pemilik_mobil' name='pemilik_mobil' value='" . $getDetail["pemilik_mobil"] . "' readonly>
                    <label for='merk_mobil'>Merk</label>
                    <input type='text' id='merk_mobil' name='merk_mobil' value='" . $getDetail["merk_mobil"] . "' readonly>
                    <label for='tanggal_beli'>Tanggal Beli</label>
                    <input type='date' id='tanggal_beli' name='tanggal_beli' value='" . $getDetail["tanggal_beli"] . "' readonly>
                    <label for='desc'>Deskripsi</label>
                    <textarea id='deskripsi' name='deskripsi' style='height:200px; width: 600px; border-radius: 8px;' readonly> " . $getDetail["deskripsi"] . " </textarea>
                    <label for='inputGroupFile01'>Foto</label>
                    <div class='input-group mb-3'>
                      <input type='text' class='form-control' id='inputGroupFile01' value='" . $getDetail["foto_mobil"] . "' readonly>
                    </div>
                    <label for='status'>Status Pembayaran</label>
                    <span class='d-flex'>
                      <input type='radio' name='status_pembayaran' id='lunas' value='Lunas' " . (($getDetail["status_pembayaran"] == 'Lunas') ? 'checked="checked"' : "") . " style='width: 15px; height: 15px; margin-right:10px;'>
                      <label for='lunas' style='margin-top: 15px; margin-right:10px;'>Lunas</label>
                      <input type='radio' name='status_pembayaran' id='belum_lunas' value='Belum Lunas' " . (($getDetail["status_pembayaran"] == 'Belum Lunas') ? 'checked="checked"' : "") . " style='width: 15px; height: 15px; margin-right:10px;'>
                      <label for='belum' style='margin-top: 15px;'>Belum Lunas</label>
                    </span>
                    <a href='edit-tsania.php?id=" . $getDetail["id_mobil"] . "' class='btn btn-primary' style='margin-top: 40px;'>Edit</a>
                  </form>
                </div>
            ";
      }
      ?>
    </div>
  </section>
  <!-- Form End -->

  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>