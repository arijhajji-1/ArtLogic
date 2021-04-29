<?php
/* This script allows you to receive data from forms to your email */
if (!empty($_POST))
	{

		/* SETTINGS */

		// email "subject"
		$title = 'New message from my Landing page';
		// email field "From" - name of sender (e.g. your first & last name)
		$from_name = "John Jonson";
		// email field "From" - email of sender (e.g. "robot@domain.com")
		$from_email = "robot@domain.com";
		// Email to receive message - PUT YOUR EMAIL HERE
		$to = "my@email.com";
		
		/* END OF SETTINGS */
		
		$subject = $title;
		$headers = "Content-Type: text/html; charset=UTF-8\r\n";
		$headers .= "From: \"".$from_name."\" <".$from_email.">\r\n";
		$headers .= "Reply-To: \"".$from_name."\" <".$from_email.">\r\n";
		$message = $title."<br>";

		/* FORM FIELDS */
		// if you added some more fields to form, you should add them here too. $_POST["foo"] = <input name="foo" /> or <select name="foo"> or <textarea name="foo">
		
		if(!empty($_POST['name'])){			$message .= "<b>Name:</b> ".$_POST['name'].'<br />'; }					
		if(!empty($_POST['firstname'])){	$message .= "<b>First Name:</b> ".$_POST['firstname'].'<br />'; }					
		if(!empty($_POST['lastname'])){		$message .= "<b>Last Name:</b> ".$_POST['lastname'].'<br />'; }					
		if(!empty($_POST['phone'])){ 		$message .= "<b>Phone:</b> ".$_POST['phone'].'<br />';	}				
		if(!empty($_POST['email'])){ 		$message .= "<b>E-mail:</b> ".$_POST['email'].'<br />';	}				
		if(!empty($_POST['username'])){ 	$message .= "<b>Username:</b> ".$_POST['username'].'<br />';	}				
		if(!empty($_POST['username2'])){ 	$message .= "<b>Username:</b> ".$_POST['username2'].'<br />';	}				
		if(!empty($_POST['password'])){ 	$message .= "<b>Password:</b> ".$_POST['password'].'<br />';	}				
		if(!empty($_POST['password2'])){ 	$message .= "<b>Password:</b> ".$_POST['password2'].'<br />';	}				
		if(!empty($_POST['budget'])){ 		$message .= "<b>Budget:</b> ".$_POST['budget'].'<br />';	}				
		if(!empty($_POST['company_size'])){ $message .= "<b>Company Size:</b> ".$_POST['company_size'].'<br />';	}				
		if(!empty($_POST['card'])){ 		$message .= "<b>Card Number:</b> ".$_POST['card'].'<br />';	}				
		if(!empty($_POST['exp'])){ 			$message .= "<b>Expiration date:</b> ".$_POST['exp'].'<br />';	}				
		if(!empty($_POST['cvv'])){ 			$message .= "<b>CVV:</b> ".$_POST['cvv'].'<br />';	}				
		if(!empty($_POST['zip'])){ 			$message .= "<b>ZIP code:</b> ".$_POST['zip'].'<br />';	}				
		if(!empty($_POST['country'])){ 		$message .= "<b>Country:</b> ".$_POST['country'].'<br />';	}				
		if(!empty($_POST['city'])){ 		$message .= "<b>City:</b> ".$_POST['city'].'<br />';	}				
		if(!empty($_POST['address'])){ 		$message .= "<b>Address:</b> ".$_POST['address'].'<br />';	}				
		if(!empty($_POST['message'])){ 		$message .= "<b>Message:</b> ".str_replace("\n", "<br />", $_POST['message']).'<br />'; }
		if(!empty($_POST['send_copy'])){ 	$message .= "<b>User checked field:</b> Send me a copy<br />";	}				
		if(!empty($_POST['remember'])){ 	$message .= "<b>User checked field:</b> Remember me<br />";	}				
		if(!empty($_POST['rules'])){ 		$message .= "<b>User checked field:</b> I agree to the Terms of Service<br />";	}				
		if(!empty($_POST['method'])){ 		$message .= "<b>Payment method:</b> ".$_POST['method'].'<br />';	}				
		if(!empty($_POST['coupon'])){ 		$message .= "<b>Coupon code:</b> ".$_POST['coupon'].'<br />';	}				
		
		/* END OF FORM FIELDS */
		
		$res = mail($to, $subject, $message, $headers);
		
		echo 'ok';	
		
	}else{
		echo 'error';
	}
		
?>