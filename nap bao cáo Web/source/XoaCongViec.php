<?php

	$db = mysqli_connect('localhost', 'root', '', 'dataweb');
	mysqli_set_charset($db, "utf8");
	//$user = $_SESSION['username'];
//	$MaUser = $_SESSION['mauser'];

	$a = $_GET['idDeleteCongViec'];
	$query = "DELETE FROM congviec WHERE MaCongViec = '$a' ";

	
	if(mysqli_query($db, $query)){
		echo 'ok';
		 header('location: /QLTinDang.php');
	}
	
?>