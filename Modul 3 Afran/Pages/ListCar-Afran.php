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

    <section id="insert">
      <div class="container insert">
        <h1 class="titleInsert">My Show Room</h1>
        <p class="descInsert">
          List Show Room Afran - 1202200317
        </p>
            <div class="row">
                <?php
                    include '../config/connector.php';

                    $query = mysqli_query($conn, "SELECT * FROM showroom_afran_table");
                    if($query){
                        while($select = mysqli_fetch_assoc($query)){
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="../Asset/image/<?php echo $select['Foto']?>" class="card-img-top" alt="gambar mobil"
                            style="width: 288px; height:190px;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $select['Nama_Mobil']?></h5>
                            <p class="card-text"><?php echo $select['Deskripsi']?></p>
                            <a href="Detail_Afran.php"
                                class="btn btn-primary btn-edit me-4">Detail</a>
                            <a href="../config/delete.php?id_mobil=<?php echo $select['ID_Mobil']?>"
                                class="btn btn-danger btn-edit">Hapus</a>
                        </div>
                    </div>
                </div>
                <?php
                        }  
                    }
                ?>
            </div>
    </section>
</body>