<?php

echo "HEJ!";

require_once 'swift/lib/swift_required.php';
echo "HEJ!";

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 587, "tls")
  $transport->setUsername('support@pirx3d.com')
  $transport->setPassword('uchozoid1a');
echo "HEJ!";

$mailer = Swift_Mailer::newInstance($transport);
echo "HEJ!";

$message = Swift_Message::newInstance('Test Subject')
  $message->setFrom(array('abc@example.com' => 'ABC'))
  $message->setTo(array('piotr.lipert@gmail.com'))
  $message->setBody('This is a test mail.');
echo "HEJ!";

$result = $mailer->send($message);

echo "HEJ!";

?>
