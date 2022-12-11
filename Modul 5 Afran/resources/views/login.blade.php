<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Modul 5 WAD</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="/asset/vendor/aos/aos.css" rel="stylesheet">
    <link href="/asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/asset/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/asset/vendor/swiper/swiper-bundle.min.css" rel="stylesRoom stylesheet">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="/asset/style/index.css" rel="stylesheet">
</head>

  <body>

    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6" style="margin-left: -12px;">
            <img src="<?php echo "../asset/images/R32.webp" ?>" alt="" width="900px" height="940px">
            </div>
            <div class="col-md-4">
                <h1 class="titleLogin mb-5 fw-bold">
                    Login
                </h1>
                <form action="{{ route('login.action') }}" method="POST" >
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password"">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember" >
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <button class="btn btn-primary">Login</button>
                    <h5 class="forRegister fw-light mt-2">Belum memiliki akun? <a href="/register">Daftar</a></h5>
                </form>
            </div>
        </div>
    </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>