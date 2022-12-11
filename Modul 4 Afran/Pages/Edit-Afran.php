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
                      <button type="button" class="btn btn btn-light dropdown-toggle" db-bs-toggle="dropdown">
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

    <?php
        include '../config/connector.php';
    
        $id_mobil = $_GET['ID_Mobil'];
        $carList = mysqli_query($conn, "SELECT * FROM showroom_afran_table WHERE ID_Mobil = '$id_mobil'");
        while($db = mysqli_fetch_array($carList)){
    ?>
       <section id="add">
        <div class="additem">
            <div class="judul">
                <h1><?php echo $db['Nama_Mobil']?></h1>
                <h6 style="color: grey;">Detail Mobil</h6>
            </div>
            <div class="row">
                <div class="col">
                    <img class="img-fluid" src="../Asset/image/<?php echo $db['Foto']?>"
                        alt="<?php echo $db['Nama_Mobil']?>" style="width: 600px;" />
                </div>
                <form action="../config/edit.php?id_mobil=<?php echo $data['ID_Mobil']?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for=" " class="form-label">Nama Mobil</label>
              <input  name = "Nama_Mobil" class="form-control" type="text" value="" id="Nama_Mobil"
                value="<?php echo $db['Nama_Mobil'];?>">
            </div>
            <div class="mb-3">
              <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
              <input  name = "Nama_Pemilik" class="form-control" type="text" value="" id="Nama_Pemilik"
                value="<?php echo $db['nama_pemilik'];?>">
            </div>
            <div class="mb-3">
              <label for=" merek" class="form-label">Merk</label>
              <input  name = "merek" class="form-control" type="text" value="" id="merek"
                value="<?php echo $db['merek'];?>">
            </div>
            <div class="mb-3">
              <label for="date" class="form-label">Tanggal Beli</label>
              <input type="date" class="form-control" name = "beli" value ="dd/mm/yyyy" id="beli"
                value="<?php echo $db['Tanggal_Beli'];?>">
            </div>
            <div class="mb-3">
              <label for="Deskripsi" class="form-label">Deskripsi</label>
              <input type ="text" class="form-control" id="Deskripsi" name="Deskripsi" rows="5"
                value="<?php echo $db['Deskripsi'];?>">
            </div>
            <div class="mb-3">
                <label for="Foto" class="form-label">Foto</label>
                <input class="form-control" type="file" id="Foto" name="Foto"
                value="<?php echo $db['Foto'];?>">
              </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="bayar" id="lunas" value="lunas"
                 <?php if($db['bayar']=='lunas') echo 'checked'?>>
              <label class="form-check-label" for="lunas">Lunas</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="bayar" id="belumLunas" value="belumLunas"
              <?php if($db['bayar']=='belumLunas') echo 'checked'?>>
              <label class="form-check-label" for="belumLunas">Belum Lunas</label>
            </div>
            <br><br>
            <div class="col-12">
                <a href="Edit-Afran.php?id_mobil=<?php echo $db['ID_Mobil']?>"
                class="btn btn-primary btn-edit me-4" style="width:100px;height:40px;">Edit</a>
            </div>
        </div>
        </div>
    </section>
    
    <?php
        }
    ?>
</body>
    
</body>