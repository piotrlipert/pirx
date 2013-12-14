<?php

require("postmark.php");

	
	if(isset($_REQUEST['email']))
	{
		$email = $_REQUEST['email'];
		$name  = $_REQUEST['name'];
		$message = $_REQUEST['message'];
		$question_1 = $_REQUEST['question_1'];
		$question_2 = $_REQUEST['question_2'];
		$question_3 = $_REQUEST['question_3'];
		$question_4 = $_REQUEST['question_4'];
		$space = $_REQUEST['space'];
		$rich = $_REQUEST['rich'];
	

	$sendmail = "Name " . $name . "\n";
	$sendmail = $sendmail . "Marketing ideas :" . $question_1 . "\n";
	$sendmail = $sendmail . "Canibals :" .$question_2 . "\n";
	$sendmail = $sendmail . "What to print : " .$question_3 . "\n";
	$sendmail = $sendmail . "Bruce Wayne :" .$question_4 . "\n";
	$sendmail = $sendmail . "Space dream on? " .$space . "\n";
	$sendmail = $sendmail . "Rich button on?" .$rich . "\n";
	$sendmail = $sendmail . "Additional info :" .$message . "\n";




	$postmark = new Postmark("64229856-c00b-4086-b886-24aefc8a9ae7","support@pirx3d.com",$email);
	
	$result = $postmark->to("pirx@pirx3d.com")
		->subject("Email from Pirx3D")
		->plain_message($sendmail)
		->send();
	
	if($result === true)
		echo("Application sent, we will probably contact you.");

	}
?>