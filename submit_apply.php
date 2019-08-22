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

// get this user id by passing the nid
/* $last = "SELECT id FROM users WHERE nid = $nid ";
$user_id = mysqli_query($conn, $last);
$userid_finder = mysqli_fetch_assoc($user_id);
$user = $userid_finder['id'];

echo $user; */

$sql2 = "INSERT INTO health_professional (request_letter, cv, degree, created_by, created_date) VALUES('$req_letter', '$cv', '$degree', '$applicant_names', NOW())";


if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
    header("refresh:1;url=http://localhost/job_req_pro/confirmed_sub.php"); 
} else {
    echo "Error: " . $conn->error;
} 
 






?>