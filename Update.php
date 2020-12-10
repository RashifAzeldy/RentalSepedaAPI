<?php
	if ($_SERVER['REQUEST_METHOD'] =='POST'){
    $id = $_POST['id'];
    $username = $_POST['nama'];
    $email = $_POST['email'];
    $noKTP = $_POST['noKTP'];
    $noHP = $_POST['noHP'];
    $alamat = $_POST['alamat'];

    $conn = mysqli_connect("localhost", "root", "", "dbrentalsepeda");

    $sql = "UPDATE tbuser SET nama='$username',email='$email',noKTP='$noKTP',noHP='$noHP', alamat='$alamat' WHERE id = '$id'";


    if( mysqli_query($conn, $sql) ) {
        $result["success"] = "1";
        $result["message"] = "success";

        echo json_encode($result);
        mysqli_close($conn);

    } else {

        $result["success"] = "0";
        $result["message"] = "error";

        echo json_encode($result);
        mysqli_close($conn);
    }
}
?>