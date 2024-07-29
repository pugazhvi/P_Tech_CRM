<?php
header('Content-Type: application/json');
// Get cURL resource
$data_to_post = array(
	'order_id' => $_POST[order_id],
	'order_status' => $_POST[order_status],
	'bank_ref_no' => $_POST[bank_ref_no],
	'tracking_id' => $_POST[tracking_id],
	'payment_mode' => $_POST[payment_mode],
	'amount' => $_POST[amount],
	'trans_date' => $_POST[trans_date],
	'billing_name' => $_POST[billing_name]);



$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://demo.myvisatrack.com/uvsApi/paymentInfoInsert',
    CURLOPT_USERAGENT => 'testAgent',
    CURLOPT_POSTFIELDS => $data_to_post
]);
// Send the request & save response to $resp
$resp = curl_exec($curl);
  
// Close request to clear up some resources
curl_close($curl);
echo json_encode($resp); // Modified line
exit;
?>