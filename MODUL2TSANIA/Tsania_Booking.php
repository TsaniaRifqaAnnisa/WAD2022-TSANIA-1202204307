<?php 
  $JenisMobil = isset($_POST['mobil']) ? $_POST['mobil'] : " ";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>EAD CAR RENT</title>

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


      <div class="container mt-4">
        <h6 class="text-center p-2">
            Rent your car now!
        </h6>
      </div>

      <div class="container mb-6">
          <div class="card mt-3">
            <div class="row">

                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                  <div>
                    <img src="
                    <?php
                            if($JenisMobil == "Mini Cooper"){
                              echo "https://www.semisena.com/wp-content/uploads/2020/02/Mini-Cooper-5-Door-F.jpg";
                            }
                            else if ($JenisMobil == "Fortuner"){
                              echo "https://imgcdn.oto.com/large/gallery/color/38/894/toyota-fortuner-color-729296.jpg";
                            }
                            else {
                              echo "Hhttps://asset.kompas.com/crops/I3iLqLOxnxPzFS1bHuJTKooG2qU=/316x0:9913x6398/780x390/data/photo/2021/06/03/60b87295ee563.jpg";
                            }
                          ?>
                          
                      " class="img-fluid rounded">
                  </div>
                </div>
  
  
                <div class="col-md-6">
                    <form class="m-4" method="POST" action="Tsania_MyBooking.php" >
                        <div class="mb-3">
                          <label for="nameinput" class="form-label">Name</label>
                          <input type="text" class="form-control" name="nameinput" id="nameinput" readonly="readonly" value="Tsania_1202204307">
                        </div>

                        <div class="mb-3 ">
                            <label for="dateinput" class="form-label">Book Date</label>
                            <input type="date" class="form-control" name="date" id="dateinput">
                        </div>

                        <div class="mb-3 ">
                            <label for="time" class="form-label">Start Time</label>
                            <input type="time" class="form-control" name="checkin" id="time">
                        </div>

                        <div class="mb-3 ">
                            <label for="duration" class="form-label">Duration (Days)</label>
                            <input type="number" class="form-control" name="duration" id="duration">
                        </div>

                        <div class="mb-3 ">
                          <label for="selection" class="form-label">Car Type</label>
                          <select name="mobil" class="form-select" aria-label="Default select example">
                          option selected disabled>Choose...</option>
                                <option <?php if($JenisMobil == "Mini Cooper"){echo "selected";}?> value="Mini Cooper">Mini Cooper</option>
                                <option <?php if($JenisMobil == "Fortuner"){echo "selected";}?> value="Fortuner">Fortuner</option>
                                <option <?php if($JenisMobil == "Alphard"){echo "selected";}?> value="Alphard">Alphard</option>
                              </select>

                        </div>

                        <div class="mb-3 ">
                          <label for="phone" class="form-label">Phone Number</label>
                          <input type="number" class="form-control" name="phone" id="phone">
                        </div>
                        
                        <div class="mb-3">
                          <label for="service" class="form-label">Add Service(s)</label>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service[]" value="health_protocol" id="health_protocol">
                            <label class="form-check-label" for="health_protocol">
                            Health protocol / Rp35.000
                            </label>
                          </div>
  
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service[]" value="driver" id="driver">
                            <label class="form-check-label" for="driver">
                            Driver / Rp100.000
                            </label>
                          </div>
  
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service[]" value="fuel_filled" id="fuel_filled">
                            <label class="form-check-label" for="fuel_filled">
                            Fuel filled / Rp250.000
                            </label>
                          </div>
                        </div>


                        <div class="d-grid gap-2 mb-3">
                          <button type="submit" name="submit" class="btn btn-success">Book</button>
                        </div>
                        

                    </form>
                </div>
            </div>
          </div>
      </div>

      <br><br>
      <footer class="card-footer text-center bg-light">
        Created by TSANIA_1202204307
      

  </body>
</html>