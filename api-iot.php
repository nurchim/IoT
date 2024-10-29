<?php
	include 'koneksi.php';
	
	date_default_timezone_set('Asia/Jakarta');
    $d = date("Y-m-d");
    $t = date("H:i:s");
    
    if(!empty(($_POST['suhu']) && ($_POST['kelembaban'])))
    {
	    $suhu = $_POST['suhu'];
	    $kelembaban = $_POST['kelembaban'];
	    
	     $sql = "INSERT INTO data_IoT (tgl,jam,suhu,kelembaban) VALUES ('".$d."','".$t."','".$suhu."','".$kelembaban."')";
		
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