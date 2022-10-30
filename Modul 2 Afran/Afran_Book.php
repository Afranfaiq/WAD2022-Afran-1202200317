<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modul 2 WAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="Modul 2 Afran Home.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
        <ul class="nav sticky-top justify-content-center" style="background-color:black ;">
            <li class="nav-item">
              <a class="nav-link "href="Afran_Homepage.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Afran_Form.php">Booking</a>
            </li>
          </ul>
    </header>
    <?php
    $name = $_POST['name'];
    $number = $_POST['number']; 
    $date = $_POST['date'];
    $time = $_POST['startTime'];
    $duration = $_POST['duration'];
    $mobil = $_POST['mobilType'];
    $service = $_POST['service'] ?? [];
    $splittedTime = explode(":", $time);
    $StartTime = date('Y-m-d H:i:s', strtotime('+'.$splittedTime[0].' Hours +'.$splittedTime[1].' Minutes', strtotime($date)));
    $OutTime = date('Y-m-d H:i:s', strtotime('+'.$duration.' Days', strtotime($StartTime)));
    $totalPrice = "NT bang ga paham yg ini";

    ?>

    <div class="container">
      <h1 class ="text-center">
        Thank You Afran_1202200317 for Reserving
      </h1>
      <p class ='text-center'>Please check again your reservation</p>
    </div>
          <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Booking Number</th>
            <th scope="col">Name</th>
            <th scope="col">Check In</th>
            <th scope="col">Check Out</th>
            <th scope="col">Car type</th>
            <th scope="col">Phone number</th>
            <th scope="col">Service</th>
            <th scope="col">Total Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><?php echo rand(1000000,9000000)?></td>
            <td><?php echo $name?></td>
            <td><?php echo $StartTime?></td>
            <td><?php echo $OutTime?></td>
            <td><?php echo $mobil?></td>
            <td><?php echo $number?></td>
            <td><?php 
              if(count($service)>0){
                foreach ($service as $serv){
                  echo $serv.'<br>';
                }
              }
              else{
                echo "No service.";
              }
            ?></td>
            <td><?php echo $totalPrice?></td>
          </tr>
        </tbody>
      </table>
      <a class="btn btn-primary justiy-content-center" href="Afran_Homepage.php" role="button">Kembali</a>
      <div class="footer fixed-bottom">
        Created by Afran_1202200317
      </div>
</body>
</html>