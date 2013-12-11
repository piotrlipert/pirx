<?php


session_start();


require("postmark.php");

function createorder($o)
{

$order = "Pirx ordered by :\n";
$order = $order . $o["name"] . "\n";
$order = $order . $o["companyname"]. "\n";

$order = $order . $o["billingcity"]. "\n";
$order = $order . $o["billingstreet"]. "\n";
$order = $order . $o["billingcode"]. "\n";

$order = $order . $o["city"]. "\n";
$order = $order . $o["street"]. "\n";
$order = $order . $o["code"]. "\n";

$order = $order . $o["email"]. "\n";
$order = $order . $o["tax"]. "\n";
$order = $order . $o["personal"]. "\n";
$order = $order . $o["same"]. "\n";
$order = $order . $o["message"] . "\n";

return $order;

}

	
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
        "city" => $_REQUEST['city'],
        "street" => $_REQUEST['street'],
        "postal_code" => $_REQUEST['postal_code']
        
        );




$url = 'https://sandbox.przelewy24.pl/index.php';
$data = array(
				 'key1' => 'value1',
				 'key2' => 'value2'


				 );

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

var_dump($result);



	$postmark = new Postmark("64229856-c00b-4086-b886-24aefc8a9ae7","support@pirx3d.com",$order['email']);
	
	$result = $postmark->to("pirx@pirx3d.com")
		->subject("Order from Pirx3D")
		->plain_message(createorder($order))
		->send();
	
	if($result === true)
		echo("Message sent");

	}
?>