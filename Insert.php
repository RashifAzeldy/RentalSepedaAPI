<?php
	$kode = $_POST['kode'];
    $merk = $_POST['merk'];
    $warna = $_POST['warna'];
    $hargaSewa = $_POST['hargaSewa'];
	$jenis = $_POST['jenis'];

	$con = mysqli_connect("localhost", "root", "", "dbrentalsepeda");
	$sql = "INSERT INTO tbsepeda (kode , merk , warna , jenis,	hargaSewa) VALUES ('$kode', '$merk', '$warna', '$jenis' , '$hargaSewa')  ";
	$json["hasil"]=array();
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]="sukses";
	}else{
		$json["hasil"]["respon"]="gagal";
	}
	echo json_encode($json);
?>