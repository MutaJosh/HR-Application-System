<?php
require 'conn.php';


$applicant_names = $_POST['applicant'];
$tel = $_POST['telephone'];
$email = $_POST['email'];
$nid = $_POST['nid'];

$cv = $_POST['cv'];
$req_letter = $_POST['req_letter'];
$degree = $_POST['degree'];


// Recording the submitted data into the database
$sql1 = "INSERT INTO users (names, email, telephone, nid, user_type) VALUES ('$applicant_names', '$email', '$tel', '$nid', 'Applicant')";
$sql2 = "INSERT INTO health_professional (request_letter, cv, degree, created_by, created_date) VALUES('$req_letter', '$cv', '$degree', '$applicant_names', NOW())";


if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
    header("Location: confirmed_sub.php");
} else {
    echo "Error: " . $conn->error;
} 
 






?>