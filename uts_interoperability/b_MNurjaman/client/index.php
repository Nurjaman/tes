<?php
$user_name = "user";
$password = "user";

if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) ||
    $_SERVER['PHP_AUTH_USER'] != $user_name || $_SERVER['PHP_AUTH_PW'] != $password){
    header('HTTP/1.1 401 Unauhorized');
    header('WWW-Authenticate:Basic realm="Masukan Validation"');
    exit('maaf anda harus memasukkan user name dan password dengan benar');
}else{
    header("location: http://localhost/bahan_ajar/uts_interoperability/b_MNurjaman/client/client.php");
}
?>