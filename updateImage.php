<?php
$conn = mysqli_connect("localhost", "root", "", "datawed");
if($conn) {
 echo "connected";

 if(isset($_POST['uploadfilesub'])) {
	 $TenCV =  $_POST['diachiimage'];
  $filename = $_FILES['uploadfile']['name'];

  $filetmpname = $_FILES['uploadfile']['tmp_name'];
  
  $folder = 'images/';

  //$dan = '/images/';
  move_uploaded_file($filetmpname, $folder.$filename);
 
 $sql = "INSERT INTO `image` (`nameimage`,`diachiimage`) 
								VALUES ('/images/$filename', '$TenCV')";
								var_dump( $sql );
 $qry = mysqli_query($conn,  $sql);


 
 
}
}
?>
