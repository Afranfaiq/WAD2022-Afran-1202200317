<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modul 4 WAD</title>
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
            Login
        </h2>
        <br>
        <form action="../config/login.php" method="GET" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="Email" name="Email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" class="form-control" id="Password" name="Password">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="remember" name="remember">
                <label class="form-check-label" for="flexCheckDefault">
                Remember me
                </label>
            </div>
            <br>
            
            <button type="sumbit" class="btn btn-primary">Login</button>
            <br>
            <p>Dont Have account? 
                <a href="Register-Afran.php">Register</a>
            </p>
        </form>    
    </div>
</body>
</html>