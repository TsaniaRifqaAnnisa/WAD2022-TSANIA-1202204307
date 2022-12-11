

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
       

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>LOGIN</title>
	<!--NAVBAR-->
	<nav class="navbar navbar-dark bg-primary  navbar-expand-lg sticky-top" style="background-color: #e9ecef;">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <h5>Welcome to Tsania Rental Car (Find Your Car Here!)</h5>
            </div>
        </nav>
</head>
<body>
<section>
        <div class="container px-5 py-5 align-items-center">
            <div class="row align-items-center">
                <div class="col-sm">
                    <img src=""  height = "330px"alt="...">    
                </div>
                <div class="col-sm">
                    <h1 class="fw-bold">Login</h1>
                    <form action="../config/login" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email</label>
                        <input type="text" class="form-control" id="email" name="email"required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold">password</label>
                        <input type="text" class="form-control" id="password" name="password"required>
                    </div>

                    <div class="mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Remember me
                        </label>
                    </div>

                    <div class="mt-3 mb-1">
                        <button type="submit" class="btn btn-primary" name="masuk">Masuk</button>
                    </div>

                    <p>Anda belum punya akun? 
                        <a href="/">Daftar</a>
                    </p>
                </div>
            
            </div>
        </div>
    </section>
</body>
</html>
