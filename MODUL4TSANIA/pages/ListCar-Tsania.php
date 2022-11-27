<?php
    session_start();
    if( !isset($_SESSION['email']) && !isset($_COOKIE['email']))
        header("location: Login-Tsania.php");
        
    require '../config/connector.php';

    $query = "SELECT * FROM showroom_tsania_table";
    $result = mysqli_query($conn, $query);
    $status = isset($_GET['message'])? $_GET['message'] : "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <link rel="stylesheet" href="../asset/style/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="../asset/images/car.ico" />
    <style>
        body {
            font-family: "Trebuchet MS";
        }
    </style>
</head>

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
            <h2>My Show Room</h2>
            <p>List Show Room Tsania Rifqa Annisa - 1202204307</p>
            <div class="row">
                <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='col-md-3'><div class='card cardcontent'>
                        <img src='../upload/images/" . $row["foto_mobil"] . "' class='card-img-top' alt='fotomobil' style='padding: 16px;'>
                        <div class='card-body'>
                        <h5 class='card-title'>" . $row["nama_mobil"] . "</h5>
                        <p class='card-text'>" . substr($row["deskripsi"], 0, 50) . '...' . "</p>
                        <span class='d-flex'>
                            <a href='Detail-Tsania.php?id=" . $row["id_mobil"] . "' class='btn btn-" . (isset($_COOKIE['bg-nav'])? $_COOKIE['bg-nav'] : "primary") . "' style='border-radius: 120px; width:160px; height: 38px;'>Detail</a>
                            <a href='../config/delete.php?id=" . $row["id_mobil"] . "' class='btn btn-danger' style='border-radius: 100px; width:140px; height: 36px; margin-left:20px;'>Delete</a>
                        </span>
                        </div>
                    </div></div>";
                        }
                    } else {
                        header("location: ../pages/Add-Tsania.php?message=success");
                    }
                ?>
            </div>
            <div class="row mt-4">
                <p><?php echo "Jumlah Mobil : ".mysqli_num_rows($result)?></p>
            </div>
        </div>
    </main>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="../asset/images/<?php
                    if($status == "success"):
                        echo "blue.png";
                    elseif($status == "update"):
                        echo "yellow.png";
                    elseif($status == "delete"):
                        echo "red.jpg";
                    endif;
                ?>" class="rounded me-2" style="height:25px;width:25px;">
                <strong class="me-auto">Bootstrap</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Data Berhasil
                <?php 
                    if($status == "success"):
                        echo " Ditambahkan";
                    elseif($status == "update"):
                        echo " Diubah";
                    elseif($status == "delete"):
                        echo " Dihapus";
                    endif;
                ?>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script>
    $(document).ready(function () {
        var url = window.location.href;
        if (url.indexOf("?") > -1) {
            $('#liveToast').toast('show');
        }
    });
</script>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

</html>