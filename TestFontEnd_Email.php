<?php 
//Add the following code to the top of your email script if your mail script continues to fail.


// Please specify your Mail Server - Example: mail.yourdomain.com.
ini_set("SMTP","mail.YourDomain.com");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","25");

// Please specify the return address to use
ini_set('sendmail_from', 'ValidEmailAccount@YourDomain.com');

$to = "phucducktpm@gmail.com"; //Email cần gới đển
$subject = "Diễn đàn tin học công nghệ Vforum.vn"; //Tiêu đề email
$comment = "Test gửi email tới email vforum"; //Nội dung email
$header = "";
$send=mail($to, $subject, $comment, $header);
if($send){
echo "Gui email thanh cong";
}else{
	echo "Khong gui duoc email";
}
?>
