<?php


session_start();



$_SESSION['orderID'] = uniqid();


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
        "city" => $_REQUEST['city'],
        "street" => $_REQUEST['street'],
        "postal_code" => $_REQUEST['postal_code']
        
        );




$crc = $_SESSION['orderID']."|"."24150|"."2299|";
$crc = $crc . "b1f083d192850355";
$crc = md5($crc);
$url = 'https://secure.przelewy24.pl/index.php';
$data = array(
				 'p24_session_id' => urlencode($_SESSION['orderID']),
				 'p24_id_sprzedawcy' => urlencode('24150'),
				 'p24_kwota' => urlencode('2299'),
				 'p24_klient' => urlencode($order['name']),
				 'p24_adres' => urlencode($order['billingstreet']),
				 'p24_kod' => urlencode($order['billingcode']),
				 'p24_miasto' => urlencode($order['billingcity']),
				 'p24_kraj' => urlencode('PL'),
				 'p24_email' => urlencode($order['email']),
				 'p24_return_url_ok' => urlencode("www.pirx3d.com/scripts/order_verification.php"),
				 'p24_return_url_error' => urlencode("www.pirx3d.com/scripts/order_verification.php"),
				 'p24_opis' => urlencode("Drukarka 3D Pirx"),
				 'p24_language' => urlencode('PL'),
				 'p24_crc' => urlencode($crc)



				 );


$form = "";
$form = $form . "<form action = ". $url . " id="automatic_form">" . "\n";

foreach ($data as $key => $value) 
{
$form = $form . "<input type=\"text\" name=\"".$key."\" value=\"".$value. "\">\n" 
}

$form = $form . "<input type =\"submit\" id=\"sub\">" . "\n";
$form = $form . "</form>" . "\n";


echo $form;

/*

	$postmark = new Postmark("64229856-c00b-4086-b886-24aefc8a9ae7","support@pirx3d.com",$order['email']);
	
	$result = $postmark->to("pirx@pirx3d.com")
		->subject("Order from Pirx3D")
		->plain_message(createorder($order))
		->send();
	
	if($result === true)
		echo("Message sent");

	}
*/
}
?>
