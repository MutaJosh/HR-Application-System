<?php


$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "moh";
$port = "3307";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$facility_name = $_POST['facility'];
$fac_email = $_POST['fac_email'];
$fac_tel = $_POST['fac_tel'];
$passwd = $_POST['passwrd'];

$sql = "INSERT INTO users (names, email, telephone, u_password, user_type) VALUES('$facility_name', '$fac_email', '$fac_tel', '$passwd', 'Staff')";

if ($conn->query($sql) === TRUE) {
    header("refresh:1;url=http://localhost/Job_Request_Tracker/"); 
    echo '<script type="text/javascript">alert("You successfully created an account!");</script>';
} else {
    echo "Error: " . $conn->error;
} 




?>