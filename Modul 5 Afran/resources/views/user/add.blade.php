@extends('user.header')
@section('content')
 @auth

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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="/asset/style/index.css" rel="stylesheet">
</head>

<body>

 
  <section id='form'>
    <div class="container">
      <h2 class="add">Tambah Mobil</h2  w>
      <p class="addparagraf">Tambah Mobil Baru Anda Ke List Show Room</p>
      <form action="/car" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="hidden" id="name" name="user_id" value="{{ Auth::user()->id }}">
      <div class="mb-3">
            <label for=" " class="form-label">Nama Mobil</label>
              <input  name = "name" class="form-control" type="text" value="" id="Nama_Mobil">
            </div>
            <div class="mb-3">
            <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
              <input  name = "owner" class="form-control" type="text" value="" id="nama_pemilik">
            </div>
            <div class="mb-3">
            <label for=" merek" class="form-label">Merk</label>
              <input  name = " merk" class="form-control" type="text" value="" id=" merek">
            </div>
            <div class="mb-3">
            <label for="date" class="form-label">Tanggal Beli</label>
              <input type="datetime-local" class="form-control" name = "tanggal" value ="{{ now()->setTimezone('T')->format('Y-m-dTh:m') }}" id="beli">
            </div>
            <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
              <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="foto_mobil" class="form-label">Foto</label>
                <input class="form-control" type="file" id="foto_mobil" name="img_path">
            </div>

            <label for="status">Status Pembayaran</label>
            <span class="d-flex">
              <input type="radio" name="status" id="lunas" value="Lunas" style="width: 15px; height: 15px; margin-right:10px;">
              <label for="lunas" style="margin-top: 15px; margin-right:10px;">Lunas</label>
              <input type="radio" name="status" id="belum" value="Belum Lunas" style="width: 15px; height: 15px; margin-right:10px;">
              <label for="belum" style="margin-top: 15px;">Belum Lunas</label>
            </span>
            <button type="submit" class="btn btn-primary" name="btn-simpan" style="margin-top: 40px;">Selesai</button>
      </form>
    </div>
  </section>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

@endauth
@endsection