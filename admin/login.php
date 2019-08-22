<?php

    require_once '../inc/conn.php';

    $sql = "SELECT * FROM users WHERE user_type = 'Staff' ";
    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);

    if ($count >= 1) {
            header("refresh:1;url=http://localhost/job_req_pro/admin/"); 
            echo '<script type="text/javascript">alert("You successfully Logged in!");</script>';
        }else{
            header("refresh:1;url=http://localhost/job_req_pro/"); 
            echo '<script type="text/javascript">alert("Failed to login! Double check your credentials!");</script>';
            
    }
   


?>