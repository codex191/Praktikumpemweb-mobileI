<?php
	include 'function.php';
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$capres = $_POST['capres'];

	$result = mysqli_query($conn,"SELECT nik FROM pemilih WHERE nik = '$nik'");
        if( mysqli_fetch_assoc($result) ){
            echo json_encode(array("statusCode"=>201));
            return false;
        }else{
			$sql = "INSERT INTO pemilih VALUES ('$nik','$nama','$tanggal_lahir','$capres')";
			if (mysqli_query($conn, $sql)) {
				echo json_encode(array("statusCode"=>200));
			} 
			mysqli_close($conn);
	}
?>