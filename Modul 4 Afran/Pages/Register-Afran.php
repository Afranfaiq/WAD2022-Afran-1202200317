<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modul 3 WAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../Asset/style/style2.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <div class="split left">
        <div class="centered">
            <img src="../Asset/image/R32.webp" alt="" width="750" height="">
        </div>
      </div>
      
      <div class="split right">
    

        <h2>
            Register
        </h2>
        <br>
        <form action="config/register.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="Email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="Email" name="Email">
            </div>
            <div class="mb-3">
                <label for="Nama" class="form-label">Name</label>
                <input type="text" class="form-control" id="Nama" name="Nama">
            </div>
            <div class="mb-3">
                <label for="NomorHP" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="NomorHP" name="NomorHP">
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Password</label>
                <input type="password" class="form-control" id="Password" name="Password">
            </div>
            <div class="mb-3">
                <label for="PasswordConfirm" class="form-label">Password Confirmation</label>
                <input type="password" class="form-control" id="Passcon" name="PasswordConfirm">
            </div>
            <br>
            
            <button type="submit" class="btn btn-primary">Register</button>
            <p>Already have acccount? 
                <a href="Login-Afran.php">Login</a>
            </p>
        </form>
      </div>
</body>
</html>