<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../asset/style/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="../asset/images/car.ico" />
    <style>
        body {
            font-family: "Trebuchet MS";
        }
    </style>
</head>

<body>
    <div class="row g-0">
        <div class="col-md-6 d-none d-md-block">
            <img src="../asset/images/Car_Login.jpeg" alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; height: 100vh; width: 100vh; object-fit: cover" />
        </div>
        <div class="col-md-6">
            <div class="card-body p-md-5 mt-5">
                <form action="../config/login.php" method="POST">
                    <h3 class="mb-5 text-uppercase">Login</h3>
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <div class="form-outline">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required />
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <div class="form-outline">
                                <label class="form-label">Kata Sandi</label>
                                <input type="password" name="password" class="form-control" required />
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <button type="submit" class="btn btn-<?php echo isset($_COOKIE['bg-nav'])? $_COOKIE['bg-nav'] : 'primary';?>">Login</button>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" value="Y" id="rememberMe" name="rememberMe">
                        <label class="form-check-label" for="rememberMe">
                            Remember Me
                        </label>
                    </div>
                </form>
                <div class="mt-2">
                    <p>Anda Belum Punya Akun? <a href="../pages/Register-Tsania.php">Daftar</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../asset/js/bootstrap.min.js"></script>
<script src="../asset/js/popper.min.js"></script>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

</html>