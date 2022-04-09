<?php
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['Phone'];
$msg=$_REQUEST['Message'];

	if(empty($name)||empty($email)||empty($phone)||empty($msg)){
		echo "Please fill out these fields";
	}
	else {
		$to='alimubashir786110@gmail.com,mudassirraza12345@gmail.com';  
		$subject='Form Submission';
		$message="User Name : $name.\n".
		"User Email : .$email.\n".
		"Phone : $phone.\n".
 		 "User Write the following message: .\n".$msg;
		$headers="From: ".$email;
 

		mail($to, $subject, $message, $headers);
		
			echo "<script type='text/javascript'>
			alert('Thankyou for contact us, our team will contact with you very soon ')
			
			</script>";
			
				echo "<script type='text/javascript'>window.open('../services/Corporation.html')</script>";
			
		 
				
		
	}
		
		 
	
?>
 
 