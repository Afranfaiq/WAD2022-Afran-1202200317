<?php
    require './connector2.php';

    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    
    $query=mysqli_query($conn2, "SELECT * FROM users_afran WHERE Email = '$Email' && Password = '$Password'");
    $rows=mysqli_num_rows($query);

    if ($rows) {
        $data=mysqli_fetch_assoc($query);
        if (isset($_POST['RememberMe'])){
            $RememberMe = $_POST['RememberMe'];
            setcookie('RememberMe', $RememberMe, time()+86400*30, '/');
        }

        setcookie('Nama', $Name, time()+86400*30, '/' );
        setcookie('Email', $Email, time()+86400*30, '/' );
        setcookie('NomorHP', $NomorHP, time()+86400*30, '/' );
        header('location: ../Pages/Home-Afran.php');

    }else{
        echo 'Wrong Email or Password';
    }
?>