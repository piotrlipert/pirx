<?php

require("postmark.php");
	
	$postmark = new Postmark("64229856-c00b-4086-b886-24aefc8a9ae7","pirx@pirx3d.com","optional-reply-to-address");
	
	if($postmark->to("piotr.lipert@gmail.com")->subject("Email Subject")->plain_message("This is a plain text message.")->send()){
		echo "Message sent";
	}


?>
