<?php

$user = "root";
$password = "";
$db = "uts";
$host = "localhost";


$conn = mysqli_connect($host, $user, $password, $db);


if(!$conn)
echo "DB Gagal koneksi";

?>