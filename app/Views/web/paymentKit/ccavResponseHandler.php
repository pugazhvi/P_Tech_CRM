<?php include('Crypto.php')?>
<?php
	
	$workingKey='8325A4D2452709282FC617CB8D427812';		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
    session_start();
// 	echo "<center>";
//    print_r($decryptValues);
    $insert_q = 'insert into tbl_payment_info_record';
	for($i = 0; $i < $dataSize; $i++)
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==3)	$order_status=$information[1];
        if($information[0] == 'tracking_id'){
            $tracking_id = $information[1];
            $_SESSION['tracking_id'] = $information[1];
        }
        if($information[0] == 'order_id'){
            $order_id = $information[1];
            $_SESSION['order_id'] = $information[1];
        }
        else if($information[0] == 'merchant_param2'){
            $merchant_param2 = $information[1];
            $_SESSION['passport'] = $information[1];
        }
        else if($information[0] == 'merchant_param1'){
            $merchant_param1 = $information[1];
            $_SESSION['remarks'] = $information[1];
        }
        else if($information[0] == 'merchant_param3'){
            $merchant_param3 = $information[1];
//            $_SESSION['user_type'] = $information[1];
        }
        else if($information[0] == 'amount'){
            $amount = $information[1];
            $_SESSION['amount'] = $information[1];
        }
        else if($information[0] == 'billing_name'){
            $billing_name = $information[1];
            $_SESSION['billing_name'] = $information[1];
        }
        else if($information[0] == 'trans_date'){
            $trans_date = $information[1];
            $_SESSION['trans_date'] = $information[1];
        }
        else if($information[0] == 'card_name'){
            $card_name = $information[1];
            $_SESSION['card_name'] = $information[1];
        }
        else if($information[0] == 'payment_mode'){
            $payment_mode = $information[1];
            $_SESSION['payment_mode'] = $information[1];
        }
	}

//    print_r($information);
    
    header('Content-Type: application/json');
    // Get cURL resource

	if($order_status==="Success")
	{
        $data_to_post = array(
        'order_id' => $order_id,
//        'order_status' => $_POST['order_status'],
        'passport' => $merchant_param2,
//        'bank_ref_no' => $_POST['bank_ref_no'],
        'tracking_id' => $tracking_id,
        'payment_mode' => $payment_mode,
        'tp_remarks' => $merchant_param1,
        'user_type' => $merchant_param3,
        'card_name' => $card_name,
        'amount' => $amount,
        'trans_date' => $trans_date,
        'billing_name' => $billing_name
    
//        'order_id' => $_POST['order_id'],
//        'order_status' => $_POST['order_status'],
//        'passport' => $_POST['merchant_param2'],
//        'bank_ref_no' => $_POST['bank_ref_no'],
//        'tracking_id' => $_POST['tracking_id'],
//        'payment_mode' => $_POST['payment_mode'],
//        'tp_remarks' => $_POST['merchant_param1'],
//        'user_type' => $_POST['merchant_param3'],
//        'card_name' => $_POST['card_name'],
//        'amount' => $_POST['amount'],
//        'trans_date' => $_POST['trans_date'],
//        'billing_name' => $_POST['billing_name']
    
    );
        
//        print_r($data_to_post);
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
        json_encode($resp); // Modified line
        
//        $insert_q = 'insert into values ';insert into values$insert_q$keys$values
//        $keys='';
//        $values='';
//        echo '<div style="display:none"><form id="successForm" method="post">';
//        for($i = 0; $i < $dataSize; $i++) 
//        {
//            $information=explode('=',$decryptValues[$i]);
//            echo '<input type="text" name="'.$information[0].'" value="'.$information[1].'" />';
//        }
//        
//        echo '<input type="submit" id="submitbtn"/></form></div>';
        ?>
    <?php
    // echo 'asdf';
//         header("Location: https://uvs.easton.in/payres.php?res=success");
        
//        print_r($_SESSION);
        
        echo "<script>window.location.href='https://uvs.easton.in/payres.php?res=success';</script>";
        exit;
// 		echo "<br>Your transaction is successful.";
	}
	else if($order_status==="Aborted")
	{
	   // header("Location: https://uvs.easton.in/payres.php?res=aborted");
	   echo "<script>window.location.href='https://uvs.easton.in/payres.php?res=aborted';</script>";
	    exit;
// 		echo "<br>Transaction has been cancelled.";
	
	}
	else if($order_status==="Failure")
	{
	   // header("Location: https://uvs.easton.in/payres.php?res=failure");
	   echo "<script>window.location.href='https://uvs.easton.in/payres.php?res=failure';</script>";
	    exit;
// 		echo "<br>Transaction has been declined.";
	}
	else
	{
	   // header("Location: https://uvs.easton.in/payres.php?res=illegal");
	   echo "<script>window.location.href='https://uvs.easton.in/payres.php?res=illegal';</script>";
	    exit;
// 		echo "<br>Security Error. Illegal access detected";
	
	}

// 	echo "<br><br>";

//	echo "<table cellspacing=4 cellpadding=4>";
//	
//
//	echo "</table><br>";
// 	echo "</center>";
?>