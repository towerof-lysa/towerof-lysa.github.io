<?php

	if (isset($_POST["ContactForm"])) {
    
	    // Harvest submitted e-mail address
	    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
	        $email = $_POST["email"];
	        
	    }else{
	        echo "email is not valid";
	        exit;
	    }

	    $sender = $_POST["sender"];
	    $message = $_POST["message"];
	    $subject = 'toweroflysa - contact';

	    // Mail them
		$emailaddress = "ammccall24@gmail.com";
	    $mailbody = "Hi there, you have a new message from tower-of-lysa from: " . $sender . "<br>" . $message . "<br> Yeeee."; 
	       
	    mail($emailaddress, $subject , $mailbody);    
	   
		echo "Your message has been sent! I'll try to get back to you by email as soon as possible, " . $sender . ". Thanks! Here's your message:<br><br>" . $message . "<br>";        

    }//if 1
    else
    	echo "wasn't able to submit form error";

?>