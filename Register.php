<?php
	$email = $_POST['email'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$noHP = $_POST['noHP'];
	$alamat = $_POST['alamat'];
	$noKTP = $_POST['noKTP'];
	$con = mysqli_connect("localhost", "root", "", "dbrentalsepeda");
	$sql = "INSERT INTO tbuser (email  , password , nama , noHP , alamat , noKTP, roleUser) VALUES ('$email', '$password', '$nama', '$noHP', '$alamat' ,'$noKTP', '2')";
	$json["hasil"]=array();
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>