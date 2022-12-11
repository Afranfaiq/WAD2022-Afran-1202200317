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
    <link href="/asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="/asset/style/index.css" rel="stylesheet">
</head>

  </head>
<body>
@auth
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
<div class="head">
            <ul class="nav sticky-top ">
                <li class="nav-item">
                <a class="nav-link "href="/" style="color: black;">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/car" style="color: black;">My Car</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/car/create" style="color: black;">Add Car</a>
                </li>
                <div class="col">
                    <div class="dropdown">
                      <button type="button" class="btn btn btn-dark dropdown-toggle" data-bs-toggle="dropdown">
                      {{ Auth::user()->nama }}
                      </button>
                      <ul class="dropdown-menu">
                      <li><a class="dropdown-item" style="color: black;" href="{{ route('profile') }}">Profile</a></li>
                      <li><a class="dropdown-item" style="color: black;" href="{{ route('logout') }}">Log Out</a></li>
                      </ul>
                    </div>
                  </div>
            </ul>
        </div>
    </nav>
    
    @endauth
    @yield('content')
</body>


  <br>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</html>
