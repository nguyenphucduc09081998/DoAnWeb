<?php

$json= file_get_contents('php://input');
$obj = json_decode($json, TRUE);
$hoten = $obj["hoten"];
$user = $obj["user"];
$pass =  md5($obj["pass"]);



	
	$db = mysqli_connect("localhost","root","","testdoandidong");//ket noi data
	mysqli_set_charset($db, "utf8");
	
	$sql = "insert into user values (null, '$hoten','$user','$pass')";
	if(mysqli_query($db,$sql)){
		echo 'ok';
	}else{
		echo 'ko';
	}

/*
{"kp":"<?=$c?>"}
*/
?>
