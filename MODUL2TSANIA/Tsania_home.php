<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>EAD CAR RENT</title>

    <style>
      #primary{
        color: #0d6efd;
      }
      .terakhir{
        margin-top: 5%;
      }

    </style>
    
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
          <div class="collapse navbar-collapse" >
            <ul class="navbar-nav  mx-auto">
              <li class="nav-item">
                <a class="nav-link" href="Tsania_Home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Tsania_Booking.php">Booking</a>
              </li>  
            </ul>
          </div>
        </div>
      </nav>

    
    <div >
      <h4 class="d-flex justify-content-center m-3">
        WELCOME TO EAD CAR RENT
    </div>
    
    <div class="container">
      <h6 class="d-flex justify-content-center">
        Find your best car, here!
      </h6>
    </div>

    <form action="Tsania_MyBooking.php" method="POST">
      <div class="container mt-4">
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="https://www.semisena.com/wp-content/uploads/2020/02/Mini-Cooper-5-Door-F.jpg" alt="Mini Cooper" >
              <div class="card-body">
                <h5 class="card-title">Mini Cooper</h5>
                <p class="card-text" style="color: gray">
                  Rp500.000 / Day 
                </p>
              </div>
      
              <ul class="list-group list-group-flush text-center">
                <li class="list-group-item" id="primary"><b>5 Kursi</b></li>
                <li class="list-group-item" id="primary"><b>1499 CC</b></li>
                <li class="list-group-item" id="primary"><b>Automatic</b></li>
              </ul>
      
              <div class="card-body text-center" style="background-color:rgb(238, 238, 238);">
                <button type="submit" name="mobil" value="Mini Cooper" class="btn btn-primary ">Book Now</button>
                
              </div>   
      
            </div> 
          </div> 
      

          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="https://imgcdn.oto.com/large/gallery/color/38/894/toyota-fortuner-color-729296.jpg" alt="Fortuner">
              <div class="card-body">
                <h5 class="card-title">Fortuner</h5>
                <p class="card-text" style="color: gray">
                  Rp200.000 / Day
                </p>
              </div>
      
              <ul class="list-group list-group-flush text-center">
                <li class="list-group-item" id="primary"><b>7 Kursi</b></li>
                <li class="list-group-item" id="primary"><b>2755 CC</b></li>
                <li class="list-group-item" id="primary"><b>Automatic</b></li>
              </ul>
      
              <div class="card-body text-center" style="background-color:rgb(238, 238, 238);">
                <button type="submit" name="mobil" value="Fortuner" class="btn btn-primary ">Book Now</button>
              </div>   
      
            </div> 
          </div> 
          
          
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="https://asset.kompas.com/crops/I3iLqLOxnxPzFS1bHuJTKooG2qU=/316x0:9913x6398/780x390/data/photo/2021/06/03/60b87295ee563.jpg" alt="Alphard" />
              <div class="card-body">
                <h5 class="card-title">Alphard</h5>
                <p class="card-text" style="color: gray">
                  Rp400.000 / Day
                </p>
              </div>
      
              <ul class="list-group list-group-flush text-center">
                <li class="list-group-item" id="primary"><b>7 Kursi</b></li>
                <li class="list-group-item" id="primary"><b>3456 CC</b></li>
                <li class="list-group-item" id="primary"><b>Automatic</b></li>
              </ul>
      
              <div class="card-body text-center" style="background-color:rgb(238, 238, 238);">
                <button type="submit" name="mobil" value="Alphard" class="btn btn-primary ">Book Now</button>
              </div>   
      
            </div> 
          </div> 
      
        </div>
      </div>
    </form>
    

  
    <br><br>
      <footer class="card-footer text-center bg-light">
        Created by TSANIA_1202204307   
    </footer> 

  </body>
</html>