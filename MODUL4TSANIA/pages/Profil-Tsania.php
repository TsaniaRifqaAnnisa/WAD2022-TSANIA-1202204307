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
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body p-md-5 text-black">
                            <form action="../config/profile.php" method="POST">
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" readonly
                                                value="<?php echo $row["email"];?>" class="form-control"
                                                required />
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Nama</label>
                                            <input type="text" name="nama" value="<?php echo $row["nama"];?>"
                                                class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Nomor Handphone</label>
                                            <input type="phone" name="no_hp" value="<?php echo $row["no_hp"];?>"
                                                class="form-control" required />
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-md-12 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Kata Sandi</label>
                                            <input type="password" name="password" class="form-control"
                                                required />
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Konfirmasi Kata Sandi</label>
                                            <input type="password" name="repassword"
                                                class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Warna Navbar</label>
                                            <select class="form-select" name="bg-nav">
                                                <option value="primary">Biru</option>
                                                <option value="success">Hijau</option>
                                                <option value="warning">Kuning</option>
                                                <option value="secondary">Grey</option>
                                                <option value="danger">Merah</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end pt-3">
                                    <button type="submit" class="btn btn-<?php echo isset($_COOKIE['bg-nav'])? $_COOKIE['bg-nav'] : 'primary';?> btn-lg ms-2">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

</html>