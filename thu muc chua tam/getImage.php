
<!DOCTYPE html>

<html>
<head>
</head>


<body>
<?php
$db = mysqli_connect("localhost","root","","datawed");//ket noi data
	$img = mysqli_query($db,"select * from image");
while($row = mysqli_fetch_array($img))
	
{?>
				<h2><?php echo $row["id"]; ?></h2>				
<img src=" <?php echo $row["nameimage"]; ?>">

<?php
}
?>



</body>



</html>