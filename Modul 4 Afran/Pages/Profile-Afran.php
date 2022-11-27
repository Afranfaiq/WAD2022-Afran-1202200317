<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modul 3 WAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../Asset/style/style1.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>
<body>
  <header>
        <div class="head">
            <ul class="nav sticky-top ">
                <li class="nav-item">
                <a class="nav-link "href="Home-Afran.php" >Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="ListCar-Afran.php">My Car</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="Add-Afran.php">Add Car</a>
                </li>
                <div class="col">
                    <div class="dropdown">
                      <button type="button" class="btn btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                        Afran
                      </button>
                      <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="Profile-Afran.php">Profile</a></li>
                      <li><a class="dropdown-item" href="Home2-Afran.php">Log Out</a></li>
                      </ul>
                    </div>
                  </div>
            </ul>
        </div>
    </header>

    <section>
        <div class="additem">
            <div class="judul">
                <h1 style="text-align:center">Profile</h1>
            </div>
            <form action="">
                <div class="mb-3 row">
                    <label for="Email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" readonly class="form-control-plaintext" id="Email"
                            value="<?php echo $_COOKIE['Email']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="Nama" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Nama" name="Nama"
                            value="<?php echo $_COOKIE['Nama']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="NomorHP" class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="NomorHP" name="NomorHP"
                            value="<?php echo $_COOKIE['NomorHP']; ?>">
                    </div>
                </div>
                <hr>
                <div class="mb-3 row">
                    <label for="Password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="Password" name="Password">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="PasswordConfirm" class="col-sm-2 col-form-label">Password Confirmation</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="PasswordConfirm" name="PasswordConfirm">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="navbar" class="col-sm-2 col-form-label">Navbar Color</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="navbar" value="Default">
                    </div>
                </div>
                <div style="text-align:center;">
                    <br>
                    <div class="col-12">
                        <button class="btn btn-secondary" type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>