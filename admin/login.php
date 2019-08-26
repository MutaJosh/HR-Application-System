<?php
/* 
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
    */

    SESSION_START();

  require '../inc/conn.php';

  //  PHP codes to check the user!
       $error = '';
         if(isset($_POST['submit'])){

            if(empty($_POST['email']) || empty($_POST['passwrd'])){
               $error = "Username and Password are not filled!";
               echo $error;
            } else{
                $user = $_POST['email'];
                $pass = $_POST['passwrd'];

                $str = "SELECT * FROM users WHERE password = '$pass' AND email = '$user' AND user_type='Staff' ";

                $query = mysqli_query($conn, $str);
                $res = mysqli_fetch_assoc($query);

                $user_name = $res['names'];

                $rows = mysqli_num_rows($query);
                
                  if($rows == 1){
                    $_SESSION['user'] = $user_name;

                    header("refresh:1;url=http://localhost/Job_Request_Tracker/admin/"); 
                    echo '<script type="text/javascript">alert("You successfully Logged in!");</script>';
                  }else{
                    header("refresh:1;url=http://localhost/Job_Request_Tracker/"); 
                    echo '<script type="text/javascript">alert("Failed to login! Double check your credentials!");</script>';
                  }
            }
       }




?>