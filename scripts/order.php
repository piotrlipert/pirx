<?php

require("postmark.php");

	
	if(isset($_REQUEST['email']))
	{
		$email = $_REQUEST['email'];
		$name  = $_REQUEST['name'];
		$message = $_REQUEST['message'];
	



	$postmark = new Postmark("64229856-c00b-4086-b886-24aefc8a9ae7","support@pirx3d.com",$email);
	
	$result = $postmark->to("pirx@pirx3d.com")
		->subject("Email from Pirx3D")
		->plain_message($message)
		->send();
	
	if($result === true)
		echo("Message sent");

	}
?>