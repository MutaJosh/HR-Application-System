<?php
require_once './inc/conn.php';


$facility_name = $_POST['facility'];
$fac_email = $_POST['fac_email'];
$fac_tel = $_POST['fac_tel'];
$passwd = $_POST['passwrd'];

$sql = "INSERT INTO users (names, email, telephone, password, user_type) VALUES('$facility_name', '$fac_email', '$fac_tel', '$passwd', 'Staff')";

if ($conn->query($sql) === TRUE) {
    header("refresh:1;url=http://localhost/JTA/"); 
    echo '<script type="text/javascript">alert("You successfully created an account!");</script>';
} else {
    echo "Error: " . $conn->error;
} 




?>