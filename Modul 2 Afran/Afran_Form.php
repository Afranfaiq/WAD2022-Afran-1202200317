<?php 
    $car = '';
    if(isset($_GET['car'])){
      $car = $_GET['car'];
    }
?>
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
    <section id="Daftar Reservasi">
        <?php if($car != ''){ ?>
        <img src="<?php echo $car.'.png'?>" class="card-img-top" alt="...">
        <?php } ?>
        <h2>Rent your car now!</h2>
        <br>
        <form action="Afran_Book.php" method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input  name = "name" class="form-control" type="text" value="Afran_1202200317" readonly>
          </div>
          <div class="mb-3">
            <label for="number" class="form-label">Nomor Telepon</label>
            <input type="number" class="form-control" name = "number" value="" id="number">
          </div>
          <div class="mb-3">
            <label for="date" class="form-label">Book Date</label>
            <input type="date" class="form-control" name = "date" value ="dd/mm/yyyy" id="book">
          </div>
          <div class="mb-3">
            <label for="time" class="form-label">Start time</label>
            <input type="time" class="form-control" name = "startTime" value ="" id="time">
          </div>
          <div class="mb-3">
            <label for="duration" class="form-label">Duration (Days)</label>
            <input type="text" class="form-control" name = "duration" value ="" id="duration">
          </div>
          <div class="mb-3">
            <label for="mobil" class="form-label">Pilih Mobil</label>
            <select name = "mobilType" id ="" class="form-select">
                <option select disabled>Pilih Mobil</option>
                <option value="Honda Civic" <?php if($car == "Honda Civic") echo "selected";?>>Honda Civic</option>
                <option value="Mazda 3" <?php if($car == "Mazda 3") echo "selected";?>>Mazda 3</option>
                <option value="Honda Brio" <?php if($car == "Honda Brio") echo "selected";?>>Honda Brio</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="service" class="form-label">Add Service</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Health Protocol" id="" name="service[]">
                <label class="form-check-label" for="flexCheckDefault">
                  Health Protocol / Rp 50.000,00
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Driver" id="" name="service[]">
                <label class="form-check-label" for="flexCheckDefault">
                  Driver / Rp 100.000,00
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Fuel Filled" id="" name="service[]">
                <label class="form-check-label" for="flexCheckDefault">
                  Fuel Filled / Rp 350.000,00
                </label>
              </div>
          </div>
          <br>
          <button class="btn btn-primary" type="submit" name="book">Book</button>
          <div class="footer fixed-bottom">
            Created by Afran_1202200317
          </div>
        </form>
  </body>