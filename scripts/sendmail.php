<?php

	
	
	

require("postmark.php");
echo "BRATPIT"	
	$postmark = new Postmark("64229856-c00b-4086-b886-24aefc8a9ae7","support@pirx3d.com","optional-reply-to-address");
	
	$result = $postmark->to("reciver@example.com")
		->subject("Email Subject")
		->plain_message("This is a plain text message.")
		#->attachment('File.pdf', $file_as_string, 'application/pdf')
		->send();
	
	if($result === true)
		echo "Message sent";


?>
