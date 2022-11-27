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

        <?php 
        foreach($sql as $data) { ?>
            <h2>Edit</h2>
            <p style="color:gray">Edit Mobil <?php echo $data['nama_mobil']?></p>

            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center align-items-top">
                        <div class="card" style="width: 35rem;">
                            <img src="<?php echo $data['foto_mobil'];?>" width=100%>
                        </div>
                </div>

                <div class="col-md-6">
                    <div class="card" style="width: 35rem;">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="namamobil">Nama Mobil</label><br>
                                <input type="text" id="namamobil" name="namamobil" value="<?php echo $data["nama_mobil"];?>" ><br><br>
                            </div>

                            <div class="mb-3">
                                <label for="namapemilik">Nama Pemilik</label><br>
                                <input type="text" id="namapemilik" name="namapemilik" value="<?php echo $data["pemilik_mobil"];?>" ><br><br>
                            </div>

                            <div class="mb-3">
                                <label for="merk">Merk</label><br>
                                <input type="text" id="merk" name="merk" value="<?php echo $data["merk_mobil"];?>" ><br><br>
                            </div>

                            <div class="mb-3">
                                <label for="beli">Tanggal Beli</label><br>
                                <input type="date" id="beli" name="beli" value="<?php echo $data["tanggal_beli"];?>" ><br><br>
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi">Deskripsi</label><br>
                                <textarea id="deskripsi" name="deskripsi" ><?=$data['deskripsi']?></textarea><br><br>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-control-plaintext">Status Pembayaran</label>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="status" value="Lunas" <?php if($data['status_pembayaran']=='Lunas') {?> checked <?php }?>>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Lunas
                                </label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="status" value="Belum Lunas" <?php if($data['status_pembayaran']=='Belum Lunas') {?> checked <?php } ?>>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Belum Lunas
                                </label>
                            </div>
                            <div class="mb-3">
                                <input type="submit" id="add" name="add" class="btn btn-primary" value="Selesai">
                            </div>
                        </form>
                        <br><br>
                    </div>
                </div>
            </div>
        
        </div>

        <?php }
            if(isset($_POST["add"])){
                $car = $_POST['namamobil'];
                $owner = $_POST['namapemilik'];
                $merk = $_POST['merk'];
                $buy = $_POST['beli'];
                $description = $_POST['deskripsi'];
                $status = $_POST['status'];
        
                $sql = mysqli_query($connect, "UPDATE showroom_tsania_table SET nama_mobil='$car', pemilik_mobil='$owner', merk_mobil='$merk', tanggal_beli='$buy', deskripsi='$description', status_pembayaran='$status' WHERE id_mobil='$id'");

            
                echo "<script>alert('Data berhasil diupdate')</script>";
                echo "<meta http-equiv = 'refresh' content ='1 url =Mycar-Tsania.php'>";
                // header("Location:MyCar-Tsania.php");
                
            }
        
        ?>
        </div>
    </body>