<?php
	$action = $_POST['action']; // Lấy giá trị action
	if(!empty($_POST['username']) && $action == 'check_user')
	{
		// Lấy giá trị user_name
		$user = $_POST['username']; 
		
		// Chuyển giá trị user_name thành chữ thường & gọi hàm kiểm tra
		username_exist(strtolower($user)); 
	}
	
	function username_exist($user)
	{
		$db = mysqli_connect('localhost', 'root', '', 'dataweb');
		$sql = "select Username from user";

		$result = mysqli_query($db,$sql);
		//$total_rows = mysqli_fetch_array($result)[0];
		//$total_rows=mysqli_fetch_array($result);
		// $post = array();
		 $x = 0;
		while($row = mysqli_fetch_array($result))
		{
			$post[$x] = $row['Username'];
			$x++;
		}
		//print_r($post);
		
		// Mảng giá trị user_name đã tồn tại
		//$user_arr = array("2cweb", "2cwebvn", "chickchick");
		
		// Kiểm tra user_name mình nhập vào có nằm trong mảng đó hay không?
		// User_name thuộc 1 giá trị trong mảng => user_name tồn tại
		if(in_array($user, $post))
		{
			echo "<span><strong>Username: {$user}</strong> đã tồn tại! </span>";
		}	
		else // Ngược lại user_name Ko tồn tại
		{
			//echo "<span><strong>Username: {$user}</strong> co the dung!</span>";	
		}
	}

?>