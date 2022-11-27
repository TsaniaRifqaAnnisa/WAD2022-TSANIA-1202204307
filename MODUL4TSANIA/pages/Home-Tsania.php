<?php 
    session_start();
    require './config/connector.php';
?>    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./asset/style/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="./asset/images/car.ico" />
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
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <?php if(isset($_SESSION['email']) || isset($_COOKIE['email'])):?>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="pages/list-tsania.php">My Car</a>
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

                                $mysql = "SELECT * FROM user_tsania WHERE email = '$email'";
                                $rslt = mysqli_query($connector, $mysql);
                                $row = mysqli_fetch_assoc($rslt);

                                echo $row["nama"];
                            ?>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="pages/profil-tsania.php">Profile</a></li>
                                <li><a class="dropdown-item" href="./config/logout.php">Logout</a></li>
                            </ul>
                        </div>
                        <a class="btn btn-light" style="margin-right: 10px;" href="pages/add-tsania.php">Add Car</a>
                    <?php else:?>
                        <a class="btn btn-light" href="pages/login-tsania.php">Login</a>
                    <?php endif;?>
                </form>
            </div>
        </div>
    </nav>
    <main>
        <div class="container">
            <div class="row justify-content-md-center row align-items-center" style="height: 85vh;">
                <div class="col-md-5">
                    <p>
                        <h1>Welcome to Tsania Show Room</h1>
                        Kami menyediakan berbagai macam mobil dengan harga terjangkau.
                    </p>
                    <?php if(isset($_SESSION['email']) || isset($_COOKIE['email'])):?>
                        <a class="btn btn-<?php echo isset($_COOKIE['bg-nav'])? $_COOKIE['bg-nav'] : 'primary';?>" href="pages/list-tsania.php" role="button">My Car</a>
                    <?php endif;?>
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <img src="./asset/images/logo-ead.png" class="card-img-top">
                        </div>
                        <div class="col-md-4">
                            Tsania_1202204307
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="./asset/images/Car.png" class="card-img-top rounded">
                </div>
            </div>
        </div>
    </main>
</body>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

</html>