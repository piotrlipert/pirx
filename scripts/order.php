<?php






require("postmark.php");

function createorder($o)
{

$order = "Pirx ordered by :\n";
$order = $order . "Name : " . $o["name"] . "\n";
$order = $order . "Company name : " . $o["companyname"]. "\n";

$order = $order . "Billing street : " .  $o["billingstreet"]. "\n";
$order = $order . "Billing city :" .  $o["billingcity"]. "\n";
$order = $order . "Billing code :" .  $o["billingcode"]. "\n";


$order = $order . "Email : " .  $o["email"]. "\n";
$order = $order . "Tax id : " .  $o["tax"]. "\n";
$order = $order . "Personal pickup? " .  $o["personal"]. "\n";
$order = $order . "Shipping adress same as billing? " .  $o["same"]. "\n";

$order = $order . "Shipping city " .  $o["city"]. "\n";
$order = $order . "Shipping street" .  $o["street"]. "\n";
$order = $order . "Shipping code " .  $o["code"]. "\n";

$order = $order . "Additional message :" .  $o["message"] . "\n";

return $order;

}


extract($_POST);
	
	if(isset($_REQUEST['email']))
	{

		$order = array(

        "name" => $_REQUEST['name'],
        "companyname" => $_REQUEST['companyname'],
        "billingcity" => $_REQUEST['billingcity'],
        "billingstreet" => $_REQUEST['billingstreet'],
        "billingcode" => $_REQUEST['billingcode'],
        "email" => $_REQUEST['email'],
        "tax" => $_REQUEST['tax'],
        "personal" => $_REQUEST['personal'],
        "same" => $_REQUEST['same'],
        "message" => $_REQUEST['message'],
        "city" => $_REQUEST['shipcity'],
        "street" => $_REQUEST['shipstreet'],
        "postal_code" => $_REQUEST['shipcode']
        
        );




	$postmark = new Postmark("64229856-c00b-4086-b886-24aefc8a9ae7","support@pirx3d.com",$order['email']);
	
	$result = $postmark->to("pirx@pirx3d.com")
		->subject("Order from Pirx3D")
		->plain_message(createorder($order))
		->send();
	
	if($result === true)
		echo("Message sent");

	}


?>
