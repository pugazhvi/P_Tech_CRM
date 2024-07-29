<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
	};
</script>
<style>
   td{
       border:none;
   }
   .hidden{
       display:none;
   }
   input[type=submit]{
       background-color:#3B74B5;
       color:white;
       padding:1% 3%;
   }
   body{
       background:url(../images/background.png);
       margin:10%;
   }
   table{
       background-color:#fff;
       border:none;
       padding:1% 3%;
   }
   input[type=text]{
       border:none;
       outline:none;
       /*margin-bottom:20px;*/
       /*height:30px;*/
   }
   tr{
       margin-bottom:30px;
   }
    
</style>
</head>
<body>
	<form method="post" name="customerData" action="ccavRequestHandler.php">
		<table width="40%" height="100" border='1' align="center"><caption><font size="4" color="blue"><b>Integration Kit</b></font></caption></table>
			<table width="40%" height="100" border='1' align="center">
<!--
				<tr>
					<td>Parameter Name:</td><td>Parameter Value:</td>
				</tr>
				<tr>
					<td colspan="2"> Compulsory information</td>
				</tr>
				<tr>
					<td>TID	:</td><td></td>
				</tr>
				<tr>
					<td>Merchant Id	:</td><td></td>
				</tr>
-->
				<tr>
					<td>Order Id :</td><td><input type="hidden" name="tid" id="tid" readonly /><input type="hidden" name="merchant_id" value="221212"/>
                    <?php
                        if(isset($_POST['orderid']) && $_POST['orderid'] != '')
                            $orderid = $_POST['orderid'];
                        else{
                            date_default_timezone_set('Asia/Kolkata'); 
                            $orderid = time();
                        }
                    ?>
                            
                    <input type="text" name="order_id" value="<?php echo $orderid; ?>"/><input type="hidden" name="merchant_param2" value="<?php echo $_POST['passport'] ?>"/><input type="hidden" name="currency" value="INR"/><input type="hidden" name="redirect_url" value="https://uvs.easton.in/NON_SEAMLESS_KIT/ccavResponseHandler.php"/><input type="hidden" name="cancel_url" value="https://uvs.easton.in/NON_SEAMLESS_KIT/ccavResponseHandler.php"/></td>
				</tr>
				<tr>
					<td>Amount :</td><td><input type="text" name="amount" value="<?php echo $_POST['total_amount'] ?>"/><input type="hidden" name="billing_name" value="<?php echo $_POST['merchant_name'] ?>"/>
                    <?php
                        if($_POST['user_type'] == 'new'){
                    ?>
                    <input type="hidden" name="billing_email" value="<?php echo $_POST['nreg_email'] ?>"/><input type="hidden" name="billing_tel" value="<?php echo $_POST['nreg_phone'] ?>"/><input type="hidden" name="merchant_param1" value="<?php echo $_POST['remarks'] ?>"/><input type="hidden" name="merchant_param3" value="<?php echo $_POST['user_type'] ?>"/><input type="hidden" name="tracking_id" value="<?php echo $_POST['tracking_id'] ?>"/>
                    <?php
                        }
                        
                        ?>
                    
                    </td>
				</tr>
<!--
				<tr>
					<td>Currency	:</td><td></td>
				</tr>
-->
<!--
				<tr>
					<td>Redirect URL	:</td><td></td>
				</tr>
			 	<tr>
			 		<td>Cancel URL	:</td><td></td>
			 	</tr>
-->
<!--
			 	<tr>
					<td>Language	:</td><td><input type="text" name="language" value="EN"/></td>
				</tr>
-->
<!--
		     	<tr>
		     		<td colspan="2">Billing information(optional):</td>
		     	</tr>
		        <tr>
		        	<td>Billing Name	:</td><td><input type="text" name="billing_name" value="Charli"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Address	:</td><td><input type="text" name="billing_address" value="Room no 1101, near Railway station Ambad"/></td>
		        </tr>
		        <tr>
		        	<td>Billing City	:</td><td><input type="text" name="billing_city" value="Indore"/></td>
		        </tr>
		        <tr>
		        	<td>Billing State	:</td><td><input type="text" name="billing_state" value="MP"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Zip	:</td><td><input type="text" name="billing_zip" value="425001"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Country	:</td><td><input type="text" name="billing_country" value="India"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Tel	:</td><td><input type="text" name="billing_tel" value="9876543210"/></td>
		        </tr>
		        <tr>
		        	<td>Billing Email	:</td><td><input type="text" name="billing_email" value="test@test.com"/></td>
		        </tr>
-->
<!--
		        <tr>
		        	<td colspan="2">Shipping information(optional)</td>
		        </tr>
		        <tr>
		        	<td>Shipping Name	:</td><td><input type="text" name="delivery_name" value="Chaplin"/></td>
		        </tr>
		        <tr>
		        	<td>Shipping Address	:</td><td><input type="text" name="delivery_address" value="room no.701 near bus stand"/></td>
		        </tr>
		        <tr>
		        	<td>shipping City	:</td><td><input type="text" name="delivery_city" value="Hyderabad"/></td>
		        </tr>
		        <tr>
		        	<td>shipping State	:</td><td><input type="text" name="delivery_state" value="Andhra"/></td>
		        </tr>
		        <tr>
		        	<td>shipping Zip	:</td><td><input type="text" name="delivery_zip" value="425001"/></td>
		        </tr>
		        <tr>
		        	<td>shipping Country	:</td><td><input type="text" name="delivery_country" value="India"/></td>
		        </tr>
		        <tr>
		        	<td>Shipping Tel	:</td><td><input type="text" name="delivery_tel" value="9876543210"/></td>
		        </tr>
		        <tr>
		        	<td>Merchant Param1	:</td><td><input type="text" name="merchant_param1" value="additional Info."/></td>
		        </tr>
		        <tr>
		        	<td>Merchant Param2	:</td><td><input type="text" name="merchant_param2" value="additional Info."/></td>
		        </tr>
				<tr>
					<td>Merchant Param3	:</td><td><input type="text" name="merchant_param3" value="additional Info."/></td>
				</tr>
				<tr>
					<td>Merchant Param4	:</td><td><input type="text" name="merchant_param4" value="additional Info."/></td>
				</tr>
				<tr>
					<td>Merchant Param5	:</td><td><input type="text" name="merchant_param5" value="additional Info."/></td>
				</tr>
				<tr>
					<td>Promo Code	:</td><td><input type="text" name="promo_code" value=""/></td>
				</tr>
				<tr>
					<td>Vault Info.	:</td><td><input type="text" name="customer_identifier" value=""/></td>
				</tr>
-->
		        <tr>
		        	<td></td><td><INPUT type="submit" value="CheckOut"/></td>
		        </tr>
	      	</table>
	      </form>
	</body>
</html>