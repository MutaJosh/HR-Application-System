<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moh";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$applicant_names = $_POST['applicant'];
$tel = $_POST['telephone'];
$email = $_POST['email'];
$cv = $_POST['cv'];
$req_letter = $_POST['req_letter'];
$degree = $_POST['degree'];


// Recording the submitted data into the database
$sql = "INSERT INTO health_professional (Names, email, telephone, request_leter, cv, degree, created_by, created_date, update_by, updated_date, voided_by, voided_date) VALUES ('$applicant_names', '$tel', '$email', '$req_letter', '$cv', '$degree', '$applicant_names', NOW(), null, null, null, null)";

if ($conn->query($sql) === TRUE) {
    /* echo "You successfully submitted the application!"; */
    header("Location: confirmed_sub.php");
} else {
    echo "Error: " . $conn->error;
} 
 



$conn->close();



?>