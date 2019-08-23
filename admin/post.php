
<?php

require '../inc/conn.php';


$opp = '';
$qua = '';
$tor = '';

$opp = $_POST['opp'];
$qua = $_POST['quo'];
$tor = $_POST['tor'];

$sql1 = "INSERT INTO opening_posting (tor, created_date) VALUES('$tor', NOW() )";
$sql2 = "INSERT INTO qualification ( name, description) VALUES('$opp', null )";

if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
    header("refresh:1;url=http://localhost/Job_Request_Tracker/admin/"); 
    echo '<script type="text/javascript">alert("You successfully posted an opportunity!");</script>';
} else {
    echo "Error: " . $conn->error;
} 


?>