<?php

    require_once '../inc/conn.php';

    $sql = "SELECT * FROM users WHERE user_type = 'Staff' ";
    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);

    if ($count >= 1) {
            header("refresh:1;url=http://localhost/Job_Request_Tracker/admin/"); 
            echo '<script type="text/javascript">alert("You successfully Logged in!");</script>';
        }else{
            header("refresh:1;url=http://localhost/Job_Request_Tracker/"); 
            echo '<script type="text/javascript">alert("Failed to login! Double check your credentials!");</script>';
            
    }
   


?>