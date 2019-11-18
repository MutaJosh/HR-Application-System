
<?php
SESSION_START();

require '../inc/conn.php';


if (isset($_POST['submit'])) {
    $post_choosen = $_POST['professional'];
    $start_date = $_POST['start_date'];

/* Store a terms of reference files */
$tor = $_FILES['tor']['name'];
$tmp_name = $_FILES['tor']['tmp_name'];
$tor_dir = '../TOR/' . $_SESSION['user'] . '__' . $tor;
move_uploaded_file($tmp_name, $tor_dir);
}

$user = $_SESSION['user'];
$sql = "SELECT id FROM users WHERE names = '$user' ";
$res = mysqli_query($conn, $sql);
$u_res = mysqli_fetch_assoc($res);
$user_id = $u_res['id'];

$sql1 = "INSERT INTO opening_posting (user, tor, start_date, created_date, created_by) VALUES('$user_id', '$tor', '$start_date', NOW(), '$user' )";
$sql2 = "SELECT id FROM opening_posting WHERE user = '$user_id' ORDER BY id DESC ";

if ($conn->query($sql1) === TRUE) {
    $result = $conn->query($sql2);

    if($result->num_rows > 0){
     while ($row = $result->fetch_assoc()) {
        $post_id = $row['id'];
        $sql3 = "INSERT INTO opening_posting_qualification (opening_posting, qualification) VALUES ('$post_id', $post_choosen)";
    
        if ($conn->query($sql3) === FALSE) {
            echo "Error: " . mysqli_error($conn);
        }else{
            header("refresh:1;url=http://localhost/Job_Request_Tracker/admin/"); 
            echo '<script type="text/javascript">alert("You successfully posted an opportunity!");</script>';
        }
        break;
    }
}
}



?>