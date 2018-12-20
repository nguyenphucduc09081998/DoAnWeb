<?php
	$action = $_POST['action']; // Lấy giá trị action
	if(!empty($_POST['username']) && $action == 'check_user')
	{
		$user = $_POST['username']; 
		username_exist(strtolower($user)); 
	}	
	function username_exist($user)
	{
		$db = mysqli_connect('localhost', 'root', '', 'dataweb');
		$sql = "select Username from user";
		$result = mysqli_query($db,$sql);
		 $x = 0;
		while($row = mysqli_fetch_array($result))
		{
			$post[$x] = $row['Username'];
			$x++;
		}
		if(in_array($user, $post))
		{
			echo "<span><strong>Username: {$user}</strong> đã tồn tại! </span>";
		}	
		else 
		{
			//echo "<span><strong>Username: {$user}</strong> co the dung!</span>";	
		}
	}

?>