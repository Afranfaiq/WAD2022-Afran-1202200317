  @extends('user.header')
  @section('content')
  @auth

    
    <section id="home">
      <div class="container">
        <div class="d-flex gap-5 rap justify-content-center align-items-center">
          <div>
            <h1>Selamat Datang Di Show Room Afran</h1>
            <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure aspernatur velit quia, ratione dolore quis libero temporibus molestias architecto dolorem, recusandae ab illo sequi fugiat! Quis consequuntur similique optio repellat?</p>
            <a href="/car" class="button btn-primary">My Car</a>
            <div class="d-flex align-items-center gap-5 mt-5">
              <img src="/asset/images/logo-ead.png" alt="" style="width:100px;">
              <p style="margin-top: 20px; font-size:15px;">Afran_1202200317</p>
            </div>
          </div>
          <img src="/asset/images/index.jpg" alt="" width="550">
        </div>
      </div>
    </section>
  


  @endauth
  @guest


  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <div class="head">
              <ul class="nav sticky-top ">
                  <li class="nav-item">
                  <a class="nav-link" href="/login" style="color: black;" >Login</a>
                  </li>
              </ul>
          </div>
      </nav>
      



  <section id="home">
      <div class="container">
        <div class="d-flex gap-5 rap justify-content-center align-items-center">
          <div>
            <h1>Selamat Datang Di Show Room Afran</h1>
            <p class="mt-3">Login dulu bang biar bisa akses</p>
            <div class="d-flex align-items-center gap-5 mt-5">
              <img src="/asset/images/logo-ead.png"  style="width:100px;">
              <p style="margin-top: 20px; font-size:15px;">Afran_1202200317</p>
            </div>
          </div>
          <img src="/asset/images/index.jpg" alt="" width="550">
        </div>
      </div>
    </section>
  
    @endguest
    @endsection