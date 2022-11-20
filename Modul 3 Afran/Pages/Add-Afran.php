<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modul 3 WAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../Asset/style/style.css">
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
            </ul>
        </div>
    </header>

    <section id="add">
        <h2>Tambah Mobil</h2>
        <p>Tambah mobil baru anda ke list Show Room</p>
        <form action="../config/insert.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="
              " class="form-label">Nama Mobil</label>
              <input  name = "Nama_Mobil" class="form-control" type="text" value="" id="Nama_Mobil">
            </div>
            <div class="mb-3">
              <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
              <input  name = "nama_pemilik" class="form-control" type="text" value="" id="nama_pemilik">
            </div>
            <div class="mb-3">
              <label for=" merek" class="form-label">Merk</label>
              <input  name = " merek" class="form-control" type="text" value="" id=" merek">
            </div>
            <div class="mb-3">
              <label for="date" class="form-label">Tanggal Beli</label>
              <input type="date" class="form-control" name = "beli" value ="dd/mm/yyyy" id="beli">
            </div>
            <div class="mb-3">
              <label for="deskripsi" class="form-label">Deskripsi</label>
              <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="foto_mobil" class="form-label">Foto</label>
                <input class="form-control" type="file" id="foto_mobil" name="foto_mobil">
              </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="bayar" id="lunas" value="lunas">
              <label class="form-check-label" for="lunas">Lunas</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="bayar" id="belumLunas" value="belumLunas">
              <label class="form-check-label" for="lunas">Belum Lunas</label>
            </div>
            <br><br>
            <button class="btn btn-primary" type="submit" name="selesai">Selesai</button>
          </form>
    </section>

</body>
</html>