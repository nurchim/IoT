<?php
include 'koneksi.php';
	
date_default_timezone_set('Asia/Jakarta');
$d = date("Y-m-d");
$t = date("H:i:s");
    
    if(!empty(($_GET['suhu']) && ($_GET['kelembaban'])))
    {
	    $suhu = $_GET['suhu'];
	    $kelembaban = $_GET['kelembaban'];
	    
	     $sql = "INSERT INTO data (tgl,jam,suhu,kelembaban) VALUES ('".$d."','".$t."','".$suhu."','".$kelembaban."')";
		
		if ($koneksi->query($sql) === TRUE) {
		    echo "data tersimpan";
		} else {
		    echo "Error: " . $sql . "<br>" . $koneksi->error;
		}
	} else {
	    echo "Data gagal disimpan";
	}

	$koneksi->close();	
?>
