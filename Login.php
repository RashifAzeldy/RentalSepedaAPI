<?php
    $email = $_POST['email'];
	$password = $_POST['password'];
	$con = mysqli_connect("localhost", "root", "", "dbrentalsepeda");
	$sql = "SELECT * FROM tbuser WHERE email = '$email' and password = '$password' ";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);
	
	if($count > 0){
		$json["PAYLOAD"]["respon"]=true;
		$json["PAYLOAD"]["roleUser"]=$row["roleUser"];
	}else{
		$json["PAYLOAD"]["respon"]=false;
	}
	
	echo json_encode($json);
?>