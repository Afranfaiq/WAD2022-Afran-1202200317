<?php
    require './connector2.php';

    $id = rand();
    $Name = $_POST['Nama'];
    $Email = $_POST['Email'];
    $NomorHP = $_POST['NomorHP'];
    $Password = $_POST['Password'];
    $PasswordConfirm = $_POST['PasswordConfirm'];

    if($password == $password2){
        $query = mysqli_query($conn2, "INSERT INTO users_afran (ID_User , Nama, Email, Password, NomorHP) 
        VALUES ('$id','$Name', '$Email', '$Password', '$NomorHP')");
    if($query){
        setcookie('Nama', $Name, time()+86400*30, '/' );
        setcookie('Email', $Email, time()+86400*30, '/' );
        setcookie('Password', $Password, time()+86400*30, '/' );
        setcookie('NomorHP', $NomorHP, time()+86400*30, '/' );
        header('location: ../Pages/Login-Afran.php');
    }else{
        echo 'Password didnt match';
    }
    
    }
?>