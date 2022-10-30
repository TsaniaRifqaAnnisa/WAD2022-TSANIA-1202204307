<?php 
    $name = $_POST['nameinput'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $start = date('d-m-yy', strtotime($date)) ." ". date('H:i:s', strtotime($time));
    $duration = $_POST['duration'];
    $finish = date('d-m-yy', strtotime($date)) ." ". date('H:i:s', strtotime($time.' + '.$duration.' days'));
    $phone = $_POST['phone'];
    $mobil =$_POST['mobil'];
    $harga_service = 0;
    $jumlah = 0;

    // service
    if (isset($_POST['service'])) {
        $service = $_POST['service'];
    }
    else {
        $service = '';
    }

    //jumlah
    if($mobil == "Mini Cooper"){
        $jumlah = $duration*500000;
    }else if($mobil == "Fortuner"){
        $jumlah = $duration*200000;
    }else{
        $jumlah = $duration*400000;
    }    

?>

<!doctype html>
<html>
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

      <div class="container text-center p-3">
          <h5>Thank you <?php echo $name?> for Reserving at EAD Car Rent</h5>
          <h6>Please double check your reservation details</h6>
      </div>

      <div class="container">
        <table class="table table-secondary">
            <tr >
                <th scope="col">Booking Number</th>
                <th scope="col">Name</th>
                <th scope="col">Check In</th>
                <th scope="col">Check Out</th>
                <th scope="col">Car Type</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Service(s)</th>
                <th scope="col">Total Price</th>
            </tr>

            <tb>
              <tr>
                <td><?php echo rand();?></td>
                <td><?php echo $name;?></td>
                <td><?php echo $start;?></td>
                <td><?php echo $finish;?></td>
                <!-- gedung -->
                <td> 
                    <?php echo $mobil?>
                </td>
                <td><?php echo $phone;?></td>
                <!-- service -->
                <td>
                  <?php
                        if (!empty($service)) {
                            echo '<ul>';
                            foreach ($service as $myservice) {
                                if ($myservice == "health_protocol") {
                                    $harga_service += 35000;
                                    echo '<li>' . $myservice . '</li>';
                                }
                                else if($myservice == "driver") {
                                    $harga_service += 100000;
                                    echo '<li>' . $myservice . '</li>';
                                }
                                else {
                                    $harga_service += 250000;
                                    echo '<li>' . $myservice . '</li>';
                                }
                                
                            }
                            echo '</ul>';
                        } else {
                            echo 'No service';
                        }
                      ?>
                </td>

                <!-- jumlah -->
                <td>
                    <?php echo 'Rp' . ($jumlah+$harga_service)?>
                    
                    
                </td>
              </tr>
              
            </tb>
          </table>
        </div>
        <br><br>
        <footer class="card-footer text-center bg-light">
            Created by TSANIA_1202204307
        </footer> 

    </body>