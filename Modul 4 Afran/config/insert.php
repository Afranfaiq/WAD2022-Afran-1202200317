<?php

    require './connector.php';
    $id_mobil = rand();
    $Nama_Mobil = $_POST['Nama_Mobil'];
    $nama_pemilik = $_POST['nama_pemilik'];
    $merek = $_POST['merek'];
    $beli = $_POST['beli'];
    $deskripsi = $_POST['deskripsi'];
    $foto_mobil = $_FILES['foto_mobil']['name'];
    $stausPembayran = $_POST['bayar'];
    $file = "../Asset/image/";

    if (move_uploaded_file($_FILES['foto_mobil']['tmp_name'], $file . $foto_mobil)){
        $db = "INSERT INTO showroom_afran_table (ID_Mobil,Nama_Mobil,Nama_Pemilik,Merk_Mobil,Tanggal_Beli,Deskripsi,Foto,Status_Pembayaran)
        VALUES ('$id_mobil','$Nama_Mobil','$nama_pemilik','$merek','$beli','$Deskripsi','$foto_mobil','$statusPembayaran')";

        if (mysqli_query($conn, $db)) {
            header("location: ../Pages/ListCar-Afran.php");
            } else {
                echo "Gagal";
            }
        } else {
            echo "Gagal";
        }
    
?>