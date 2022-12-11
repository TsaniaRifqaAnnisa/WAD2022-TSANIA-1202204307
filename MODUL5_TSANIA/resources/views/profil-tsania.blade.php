
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-navbar-dark bg-">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="list-tsania">My Car</a>
                    </li>
                    
                </ul>
                <form class="d-flex">
                    
                    <div class="dropdown" style="margin-right: 10px;">
                        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Profil-Tsania">Profile</a></li>
                            <li><a class="dropdown-item" href="../config/logout">Logout</a></li>
                        </ul>
                    </div>
                    <a class="btn btn-light" style="margin-right: 10px;" href="Add-Tsania">Add Car</a>
                    
                    <a class="btn btn-light" href="Login-Tsania">Login</a>
                    
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
                            <form action="../config/profile" method="POST">
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" readonly
                                                value="" class="form-control"
                                                required />
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Name</label>
                                            <input type="text" name="nama" value=""
                                                class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Phone Number (+62)</label>
                                            <input type="phone" name="no_hp" value=""
                                                class="form-control" required />
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-md-12 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control"
                                                required />
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="password" name="repassword"
                                                class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Navbar Colour</label>
                                            <select class="form-select" name="bg-nav">
                                                <option value="primary">Blue</option>
                                                <option value="success">Green</option>
                                                <option value="warning">Yellow</option>
                                                <option value="secondary">Grey</option>
                                                <option value="danger">Red</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end pt-3">
                                    <button type="submit" class="btn btn-  btn-lg ms-2">Update</button>
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
