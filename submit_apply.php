<?php
require './inc/conn.php';


if (isset($_POST['submit'])) {

    $applicant_names = $_POST['applicant'];
    $tel = $_POST['telephone'];
    $email = $_POST['email'];
    $nid = $_POST['nid'];
    $professional = $_POST['professional'];

    /* Store uploaded files in the database! */
        # Names of the files
        $file_name_cv = $_FILES["cv"]["name"];
        $file_name_req = $_FILES["req_letter"]["name"];
        $file_name_degree = $_FILES["degree"]["name"];
      
        # temporary file name to store file
        $tmp_name_cv = $_FILES["cv"]["tmp_name"];
        $tmp_name_req = $_FILES["req_letter"]["tmp_name"];
        $tmp_name_degree = $_FILES["degree"]["tmp_name"];
    
        # upload directory path
        $uploads_dir1 = 'uploads/' . $applicant_names . '__' . $file_name_cv;
        $uploads_dir2 = 'uploads/' . $applicant_names . '__' . $file_name_degree;
        $uploads_dir3 = 'uploads/' . $applicant_names . '__' . $file_name_req;

        #To move the uploaded file to specific location
        move_uploaded_file($tmp_name_cv, $uploads_dir1);
        move_uploaded_file($tmp_name_req, $uploads_dir2);
        move_uploaded_file($tmp_name_degree, $uploads_dir3);

        
// Recording the submitted data into the database
$sql1 = "INSERT INTO users (names, email, telephone, nid, user_type) VALUES ('$applicant_names', '$email', '$tel', '$nid', 'Applicant')";
$sql3 = "SELECT id FROM users WHERE nid = '$nid'";


if($conn->query($sql1) === TRUE) {
    $result = $conn->query($sql3);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $userid = $row["id"];
            $sql2 = "INSERT INTO health_professional (user, request_letter, cv, degree, created_by, created_date) VALUES('$userid', '$file_name_req', '$file_name_cv', '$file_name_degree', '$applicant_names', NOW())";
            if($conn->query($sql2) === TRUE) {
                $sql4 = "SELECT id FROM health_professional WHERE user = '$userid'";
                $result1 = $conn->query($sql4);
                        if($result1->num_rows > 0) {
                            while($row = $result1->fetch_assoc()) {
                                $hpid = $row["id"];
                                $sql5 = "INSERT INTO health_professional_qualification (health_professional,qualification) VALUES ('$hpid', '$professional')";
                                if($conn->query($sql5) === FALSE) {
                                    echo "Error: " . mysqli_error($conn);
                                }
                                break;
                            }
                        }

                        header("refresh:0;url=http://localhost/JTA/confirmed_sub.php"); 

                        $mes = "
                        Hi there,
                        
                        Thank you for applying!
                        We will be right back to you once there is an opportunity!
        
                        Best Regards,       
                        
                        
                        -----------------------
                        Ministry Of Health 
                        Kigali - Rwanda";
        
                        $sub = "Successful Application Submission - MOH!";       
                        $res = mail($email, $sub, $mes);
                        if (!$res)
                            echo "Sent!";
                            

                    } else {
                        echo "Error: " . $conn->error;
                    }
                    break;
                }
            } else {
                echo "No User with such ID";
            }
        } else {
            echo "Error: " . $conn->error;
        }

    
    }
    

?>