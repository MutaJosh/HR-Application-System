<?php

if (isset($_POST['submit'])) {
    echo "Hi";
}
$uname = $_POST['uname'];
$pass = $_POST['passwrd'];


if ($uname == 'Admin' && $pass == "Demo1234") {
    echo "You're logged in!";
}else{
    echo "Failed to login!";
}




?>