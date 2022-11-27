<?php 
    session_start();
    if( !isset($_SESSION['email']) && !isset($_COOKIE['email']))
        header("location: Login-Tsania.php");

    require '../config/connector.php';
?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet" href="../asset/style/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="../asset/images/car.ico" />
</head>
<style>
    body {
        font-family: "Trebuchet MS";
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-navbar-dark bg-<?php echo isset($_COOKIE['bg-nav'])? $_COOKIE['bg-nav'] : 'primary';?>">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <?php if(isset($_SESSION['email']) || isset($_COOKIE['email'])):?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="ListCar-Tsania.php">My Car</a>
                    </li>
                    <?php endif;?>
                </ul>
                <form class="d-flex">
                    <?php if(isset($_SESSION['email']) || isset($_COOKIE['email'])):?>
                    <div class="dropdown" style="margin-right: 10px;">
                        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <?php 
                                $email = isset($_SESSION['email'])? $_SESSION['email'] : $_COOKIE['email'];

                                $mysql = "SELECT * FROM wad_modul4 WHERE email = '$email'";
                                $rslt = mysqli_query($conn, $mysql);
                                $row = mysqli_fetch_assoc($rslt);

                                echo $row["nama"];
                            ?>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Profil-Tsania.php">Profile</a></li>
                            <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
                        </ul>
                    </div>
                    <a class="btn btn-light" style="margin-right: 10px;" href="Add-Tsania.php">Add Car</a>
                    <?php else:?>
                    <a class="btn btn-light" href="Login-Tsania.php">Login</a>
                    <?php endif;?>
                </form>
            </div>
        </div>
    </nav>
    <main>
        <div class="container py-2">
            <h2>Tambah Mobil</h2>
            <p>Tambah Mobil Baru Anda Ke Show Room</p>
            <div class="row">
                <div class="col-md-12">
                    <form action="../config/insert.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="car" class="form-label">Nama Mobil</label>
                            <input type="text" class="form-control" id="car" name="car">
                        </div>
                        <div class="mb-3">
                            <label for="own" class="form-label">Nama Pemilik</label>
                            <input type="text" class="form-control" id="owns" name="own">
                        </div>
                        <div class="mb-3">
                            <label for="merk" class="form-label">Merk</label>
                            <input type="text" class="form-control" id="merk" name="merk">
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Tanggal Beli</label>
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                        <div class="mb-3">
                            <label for="desc" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Foto</label>
                            <input class="form-control" id="image" name="image" type="file">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status Pembayaran</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="paid" id="paid">
                                <label class="form-check-label" for="paid">
                                    Lunas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="npaid" value="npaid"
                                    checked>
                                <label class="form-check-label" for="npaid">
                                    Belum Lunas
                                </label>
                            </div>
                        </div>
                        <button type="submit" name="finish" class="btn btn-<?php echo isset($_COOKIE['bg-nav'])? $_COOKIE['bg-nav'] : 'primary';?>">Selesai</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

</html>