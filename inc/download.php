<?php

require './conn.php';

$query = "SELECT u.id, h.cv
            FROM users AS u, health_professional AS h
            WHERE u.id=h.user";
$result = mysqli_query($conn, $query);

$id = $_GET['id'];

while ($res = mysqli_fetch_array($result)){
    $path = 'uploads/' . $res['cv'];
    header('content-Disposition: attachment; filename = '. $path .' ');
    header('content-type:application/octent-stream');
    header('content-length='. filesize($path));
    readfile($path);
}






?>