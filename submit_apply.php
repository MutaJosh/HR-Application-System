<?php
require './inc/conn.php';


$applicant_names = $_POST['applicant'];
$tel = $_POST['telephone'];
$email = $_POST['email'];
$nid = $_POST['nid'];

$cv = $_POST['cv'];
$req_letter = $_POST['req_letter'];
$degree = $_POST['degree'];

// Recording the submitted data into the database
$sql1 = "INSERT INTO users (names, email, telephone, nid, user_type) VALUES ('$applicant_names', '$email', '$tel', '$nid', 'Applicant')";
$sql3 = "SELECT id FROM users WHERE nid = '$nid'";


if($conn->query($sql1) === TRUE) {
    $result = $conn->query($sql3);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $userid = $row["id"];
            $sql2 = "INSERT INTO health_professional (user, request_letter, cv, degree, created_by, created_date) VALUES('$userid', '$req_letter', '$cv', '$degree', '$applicant_names', NOW())";
            if($conn->query($sql2) === TRUE) {
                header("refresh:1;url=http://localhost/Job_Request_Tracker/confirmed_sub.php"); 
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

?>