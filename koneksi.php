<?php
$servername = "sql102.infinityfree.com";
$username = "if0_37610836";
$password = "0lL8JSMqp38t";
$dbname = "if0_37610836_coba";

$koneksi = mysqli_connect($servername, $username, $password, $dbname);
if (!$koneksi){
        die("Connection Failed:".mysqli_connect_error());
    }
?>
