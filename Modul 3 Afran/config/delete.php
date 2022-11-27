<?php
    require '../connector.php';

    $id_mobil = $_GET['id_mobil'];

    mysqli_query($conn, "DELETE FROM showroom_afran_table WHERE ID_mobil = $id_mobil");
    header("location: ../ListCar_Afran.php");
?>