<?php
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $merk = $_POST['merk'];
    $jenis = $_POST['jenis'];
    $warna = $_POST['warna'];
    $hargaSewa = $_POST['hargaSewa'];

	$con = mysqli_connect("localhost","root","","dbrentalsepeda");

	$sql = "UPDATE tbsepeda SET kode='$kode', merk='$merk', jenis='$jenis', warna='$warna', hargaSewa='$hargaSewa' WHERE id='$id'";

	$json["hasil"]=array();
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
    }
    
	echo json_encode($json);
?>