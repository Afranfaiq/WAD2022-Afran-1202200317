<?php


    include 'connector.php';
    $car_name = $_POST['car_name'];
    $name = $_POST['name'];
    $merk = $_POST['merk'];
    $beli = $_POST['beli'];
    $deskripsi = $_POST['deskripsi'];
    $stausPembayran = $_POST['bayar'];
    
    mysqli_query($conn, "update showroom_afran_table set car_name='$car_name', name='$name', merk='$merk', beli='$beli', deskripsi='$deskripsi', bayar='$statusPembayaran' where id_mobil='$id'");
    
    header("location:../Home-Afran.php");
    ?> 