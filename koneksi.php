<?php
$servername = "localhost";
$username = "id17908881_udbfikom";
$password = "IoT-udbMoving2022";
$dbname = "id17908881_iot_latihan";

$koneksi = mysqli_connect($servername, $username, $password, $dbname);
if (!$koneksi){
        die("Connection Failed:".mysqli_connect_error());
    }
?>
