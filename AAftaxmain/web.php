<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['Phone'];
$msg=$_POST['Message'];

	if(empty($name)||empty($email)||empty($phone)||empty($msg)){
		echo "Please fill out these fields";
	}
	else {
		// Message send from C-panel and cpanel id show
		// $to= "mudassirraza12345@gmail.com";  
		// $subject='Form Submission';
		// $body="";

		// $body.="From:". $name."r\n";
		// $body.="email:". $email."r\n";
		// $body.="phone:". $phone."r\n";
		// $body.="Message". $msg."r\n";

		// mail($to, $subject, $body);




       $to= "mudassirraza12345@gmail.com,alimubashir786110@gmail.com";  
		$message="User Name :". $name."r\n".
		"User Email : .$email.\n".
		"Phone : $phone.\n".
 		 "User Write the following message: .\n".$msg;
		$headers="From: ".$email;
 

		mail($to, $subject, $message, $headers);
		
			echo "<script type='text/javascript'>
			alert('Thankyou for contact us, our team will contact with you very soon ')
			
			</script>";
			
				echo "<script type='text/javascript'>window.open('./pages/about.html')</script>";
	
		 
				
		
	}
		
		 
	
?>
 
 
      