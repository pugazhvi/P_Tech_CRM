
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
<head>
<meta name="viewport" content="width=device-width"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>


</head>

<body style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em; background-color: #f6f6f6; margin: 0;"  bgcolor="#f6f6f6">

<table class="body-wrap" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: #f6f6f6; margin: 0;" bgcolor="#f6f6f6">
<tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
<td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
<td class="container" width="600" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;" valign="top">
    <div class="content" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;">
        <table class="main" width="100%" cellpadding="0" cellspacing="0" itemprop="action" itemscope itemtype="http://schema.org/ConfirmAction"  style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; margin: 0; border: none;" >
            <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                <td class="content-wrap" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;padding: 30px;border: 3px solid #3bafda;border-radius: 7px; background-color: #fff;" valign="top">
                    <meta itemprop="name" content="Confirm Email" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"/>
                    <table width="100%" cellpadding="0" cellspacing="0"  style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                        

                       
                        
                        <tr>
                            <td style="text-align: center">
                                <a href="#" style="display: block; margin-bottom: 5px; "> <img src="<?= base_url()."public"; ?>/assets/images/login-logo.png" height="24" alt="logo" style="width: 120px; height: 50px;"/></a> <br/>
                            </td>
                        </tr>


                        <tr>
                            <td >
                                <table  width="100%" cellpadding="0" cellspacing="0"  style=" margin-bottom: 12px; border-bottom: 1px solid black;" >
                                    <tr style=" border-bottom: 2px solid black;">
                                        <td style="text-align: left; width:50%; padding-left: 15px; font-weight: 600;">
                                        Traveller Name
                                        </td>
                                        <td style="text-align: left; width:50%">
                                        <?= $visaData->traveller_name; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; width:50%; padding-left: 15px; font-weight: 600;">
                                        Passport No
                                        </td>
                                        <td style="text-align: left; width:50%">
                                        <?= $visaData->passport_no; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; width:50%; padding-left: 15px; font-weight: 600;">
                                        Travel To 
                                        </td>
                                        <td style="text-align: left; width:50%">
                                        <?= $visaData->country_name; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                       <td style="text-align: left; width:50%; padding-left: 15px; font-weight: 600;">
                                       Visa Type
                                        </td>
                                        <td style="text-align: left; width:50%">
                                        <?= $visaData->visa_type_name; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; width:50%; padding-left: 15px; font-weight: 600;">
                                        Req Created
                                        </td>
                                        <td style="text-align: left; width:50%">
                                        <?php echo date('d-M-Y h:i A', strtotime( $visaData->created_at )); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; width:50%; padding-left: 15px; font-weight: 600;">
                                        Req Updated 
                                        </td>
                                        <td style="text-align: left; width:50%">
                                        <?php echo date('d-M-Y h:i A', strtotime( $visaNotesData[0]['updated_at'] )); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left; width:50%; padding-left: 15px; font-weight: 600;">
                                        Current Status
                                        </td>
                                        <td style="text-align: left; width:50%">
                                        <?= $visaNotesData[0]['status_value']; ?>
                                        </td>
                                    </tr>
                                </table>   
                            </td>
                        </tr>


                        <!-- <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                            <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                Please confirm your email address by clicking the link below.
                            </td>
                        </tr>


                        <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                            <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                We may need to send you critical information about our service and it is
                                important that we have an accurate email address.
                            </td>
                        </tr> -->

                     

                        <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                            <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                              <b>Note : </b>   <?= $visaNotesData[0]['notes']; ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
      
    </div>
</td>

</tr>
</table>
</body>
</html>
