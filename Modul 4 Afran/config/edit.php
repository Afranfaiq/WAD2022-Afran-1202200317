<?php

    require './connector.php';
    $id_mobil = $_GET["ID_Mobil"]
    $Nama_Mobil = $_POST['Nama_Mobil'];
    $nama_pemilik = $_POST['nama_pemilik'];
    $merek = $_POST['merek'];
    $beli = $_POST['beli'];
    $deskripsi = $_POST['deskripsi'];
    $foto_mobil = $_FILES['foto_mobil']['name'];
    $statusPembayaran = $_POST['bayar'];
    $file = "../Asset/image/";

    if (move_uploaded_file($_FILES['foto_mobil']['tmp_name'], $file . $foto_mobil)){
        $db =  "UPDATE showroom_afran_table SET Nama_Mobil = '$Nama_Mobil', Nama_Pemilik = '$nama_pemilik', Merk_Mobil = '$merek',
        Tanggal_Beli = '$beli', Deskripsi = '$deskripsi', Foto = '$foto_mobil', Status_Pembayaran = '$statusPembayaran' 
        WHERE ID_Mobil = '$id_mobil'";
        if (mysqli_query($conn, $db)) {
            header("location: ../Pages/ListCar-Afran.php");
            } else {
                header("location: ../Pages/ListCar-Afran.php");
            }
        } else {
            echo "Gagal";
        }
    
?>