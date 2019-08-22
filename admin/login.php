<?php

    require_once '../inc/conn.php';

    $sql = "SELECT * FROM users WHERE user_type = 'Staff' ";
    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);

    if ($count >= 1) {
        header("Location: ./");       
    }else{
        header("Location: ../");
        
    }
   


?>