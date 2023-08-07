<?php
//1. Import the PayPal SDK client
namespace Sample;

require __DIR__ . '/vendor/autoload.php';
use Sample\PayPalClient;
use PayPalCheckoutSdk\Orders\OrdersGetRequest;

require 'paypal_client.php';

$orderID = $_GET['orderID'];

class GetOrder
{

  // 2. Set up your server to receive a call from the client
  public static function getOrder($orderId)
  {

    // 3. Call PayPal to get the transaction details
    $client = PayPalClient::client();
    $response = $client->execute(new OrdersGetRequest($orderId));
	

// 	$orderID = $response->result->id;
// 	$email = $response->result->payer->email_address;
// 	$name = $response->result->purchase_units[0]->shipping->name->full_name;
// 	$address = $response->result->purchase_units[0]->shipping->address;

	header("Location: https://onlinefse.com/insertSInfo1.php");		

  }
}

if (!count(debug_backtrace()))
{
  GetOrder::getOrder($orderID, true);
}
?>