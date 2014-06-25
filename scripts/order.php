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
   $order = $order . "Personal pickup? " .  ($o["shipping"] == 2 ? 'Yes' : 'No') . "\n";
   $order = $order . "Shipping adress same as billing? " .  $o["same"]. "\n";

   $order = $order . "Shipping city " .  $o["city"]. "\n";
   $order = $order . "Shipping street" .  $o["street"]. "\n";
   $order = $order . "Shipping code " .  $o["postal_code"]. "\n";

   $order = $order . "Additional message :" .  $o["message"] . "\n";

   return $order;
}

extract($_POST);

if (isset($_REQUEST['email']))
{
   $order = array(
      "name" => $_REQUEST['name'],
      "companyname" => $_REQUEST['companyname'],
      "billingcity" => $_REQUEST['billingcity'],
      "billingstreet" => $_REQUEST['billingstreet'],
      "billingcode" => $_REQUEST['billingcode'],
      "email" => $_REQUEST['email'],
      "tax" => $_REQUEST['tax'],
      "shipping" => $_REQUEST['shipping'],
      "same" => $_REQUEST['same'],
      "message" => $_REQUEST['message'],
      "city" => $_REQUEST['shipcity'],
      "street" => $_REQUEST['shipstreet'],
      "postal_code" => $_REQUEST['shipcode'],
      "type_of_payment" => $_REQUEST['type_of_payment']
   );

   $postmark = new Postmark("64229856-c00b-4086-b886-24aefc8a9ae7", "support@pirx3d.com", $order['email']);

   $result = $postmark->to("pirx@pirx3d.com")
      ->subject("Order from Pirx3D")
      ->plain_message(createorder($order))
      ->send();

   if ($result === true)
   {
      if ($order['shipping'] == 2)
      {
         echo 'Order sent.';
      }
      else
      {
         switch ($order['type_of_payment'])
         {
            case 1:
               $merchant_id = 'pirx_cc_no3d';
               $salt = '6bf08e44';
               break;
            case 2:
               $merchant_id = 'pirx_cc_3ds';
               $salt = '2b4594d1';
               break;
            case 3:
               $merchant_id = 'pirx_diners_discover_jcb';
               $salt = 'c10c2764';
               break;
            case 4:
               $merchant_id = 'pirx_pp';
               $salt = 'e2aa5c71';
               break;
            case 5:
               $merchant_id = 'pirx_paypal';
               $salt = 'a076afeb';
               break;
            case 6:
               $merchant_id = 'pirx';
               $salt = 'vu2le8mo';
               break;
         }

         $hash = sha1($salt . '|' . preg_replace('/\s+/', '', $order['name']) . '|599.00|EUR|S');
         ?>
         <form action="https://secure.paylane.com/order/cart.html" method="post">
            <input type="hidden" name="amount" value="629.00">
            <input type="hidden" name="currency" value="EUR">
            <input type="hidden" name="merchant_id" value="<?=$merchant_id?>">
            <input type="hidden" name="description" value="<?=preg_replace('/\s+/', '', $order['name'])?>" />
            <input type="hidden" name="transaction_description" value="Pirx 3D printer + shipping" />
            <input type="hidden" name="transaction_type" value="S">
            <input type="hidden" name="back_url" value="http://pirx3d.com/order/complete.php">
            <input type="hidden" name="language" value="en">
            <input type="hidden" name="hash" value="<?=$hash?>" />
            <input type="hidden" name="customer_name" value="<?=$order['name']?>" />
            <input type="hidden" name="customer_email" value="<?=$order['email']?>" />
            <input type="hidden" name="customer_address" value="<?=$order['billingstreet']?>" />
            <input type="hidden" name="customer_city" value="<?=$order['billingcity']?>" />
            <input type="hidden" name="customer_zip" value="<?=$order['billingcode']?>" />
            <button type="submit">Pay with PayLane</button>
         </form>
         <?php
      }
   }
}
?>
