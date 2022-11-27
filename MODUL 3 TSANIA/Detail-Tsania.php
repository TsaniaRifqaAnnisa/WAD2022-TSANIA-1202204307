<?php
    include('connect.php');
    $id = $_GET['id'];
    $query = "SELECT * FROM showroom_tsania_table WHERE id_mobil = $id";
    $sql = mysqli_query($connect, $query);
?>


<!doctype html>
    <html lang="en">
    <head>
        <title>EAD Rental Car</title>
    </head>
    <style>
        div.card{
            border-color: white;
        }
        input {
            width: 100%;
        }
        input[type=submit]{
            width: 20%
        }
        textarea {
            width: 100%;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <body>
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" style="justify-content: left;" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-2">
                            <a class="nav-link active" href="Home-Tsania.php"> Home </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link active" href="MyCar-Tsania.php"> My Car </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class='container col m-5'>

        <?php foreach($sql as $data) { ?>
            <h2><?php echo $data['nama_mobil']?></h2>
            <p style="color:gray">Detail Mobil <?php echo $data['nama_mobil']?></p>

            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center align-items-top">
                        <div class="card" style="width: 35rem;">
                            <img src="<?php echo $data['foto_mobil'];?>" width=100%>
                        </div>
                </div>

                <div class="col-md-6">
                    <div class="card" style="width: 35rem;">
                        <form action="./Edit-Tsania.php" method="POST">
                            <div class="mb-3">
                                <label for="namamobil">Nama Mobil</label><br>
                                <input type="text" id="namamobil" name="namamobil" value="<?php echo $data["nama_mobil"];?>" readonly><br><br>
                            </div>

                            <div class="mb-3">
                                <label for="namapemilik">Nama Pemilik</label><br>
                                <input type="text" id="namapemilik" name="namapemilik" value="<?php echo $data["pemilik_mobil"];?>" readonly><br><br>
                            </div>

                            <div class="mb-3">
                                <label for="merk">Merk</label><br>
                                <input type="text" id="merk" name="merk" value="<?php echo $data["merk_mobil"];?>" readonly><br><br>
                            </div>

                            <div class="mb-3">
                                <label for="beli">Tanggal Beli</label><br>
                                <input type="date" id="beli" name="beli" value="<?php echo $data["tanggal_beli"];?>" readonly><br><br>
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi">Deskripsi</label><br>
                                <textarea id="deskripsi" name="deskripsi" readonly><?=$data['deskripsi']?></textarea><br><br>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-control-plaintext">Status Pembayaran</label>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="status" value="Lunas" <?php if($data['status_pembayaran']=='Lunas') {?> checked <?php }else{ ?> disabled <?php } ?>>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Lunas
                                </label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="status" value="Belum Lunas" <?php if($data['status_pembayaran']=='Belum Lunas') {?> checked <?php }else{ ?> disabled <?php } ?>>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Belum Lunas
                                </label>
                            </div>
                        </form>
                        <br><br>
                            <a href='Edit-Tsania.php?id=<?php echo $data['id_mobil'];?>' class='btn btn-primary'>Edit</a>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </body>