
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
<td class="container" width="800" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top;  display: block !important; max-width: 800px !important; clear: both !important; margin: 0 auto;" valign="top">
    <div class="content" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 800px; display: block; margin: 0 auto; padding: 20px;">
        <table class="main" width="100%" cellpadding="0" cellspacing="0" itemprop="action" itemscope itemtype="http://schema.org/ConfirmAction"  style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; margin: 0; border: none;" >
            <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                <td class="content-wrap" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;padding: 30px;border: 3px solid #3bafda;border-radius: 7px; background-color: #fff;" valign="top">
                    <meta itemprop="name" content="Confirm Email" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"/>
                    <table width="100%" cellpadding="0" cellspacing="0"  style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                        

                       
                        
                        <tr>
                            <td style="text-align: center">
                                <a href="#" style="display: block; margin-bottom: 5px; "> <img src="<?= base_url()."public"; ?>/assets/images/login-logo.png" height="24" alt="logo" style="width: 145px; height: 65px;"/></a> <br/>
                            </td>
                        </tr>

                     
                        
                        <!-- <tr>
                            <td >
                                <table  width="100%" cellpadding="0" cellspacing="0"  style=" margin-bottom: 17px; border-bottom: 2px solid #3bafda; padding : 0 0 10px;" >
                                    
                                    <tr  style="margin-bottom: 17px;">

                                        <td style="text-align: center; width:50%;">
                                        <span style="font-size: 14px; color:#1aa79c;" >Client & Branch</span> 
                                        <br>
                                        <span style="font-size: 16px; font-weight: 600;"> <?= $visaData->branch; ?></span> 
                                        </td>

                                        

                                        <td style="text-align: center; width:50%;">
                                        <span style="font-size: 14px; color:#1aa79c;">Agency</span> 
                                        <br>
                                        <span style="font-size: 16px;font-weight: 600;"><?= $visaData->agency; ?></span>
                                        </td>
                                        
                                    </tr>
                                   
                               
                                </table>   
                            </td>

                        </tr> -->
                        <tr>
                            <td >
                                <table  width="100%" cellpadding="0" cellspacing="0"  style=" margin-bottom: 17px; border-bottom: 2px solid #3bafda; padding : 0 0 10px;" >
                                   <tr  style="margin-bottom: 17px;">

                                    <td style="text-align: center; width:50%;">
                                    <span style="font-size: 14px; color:#1aa79c;" >Client</span> 
                                    <br>
                                    <span style="font-size: 16px; font-weight: 600;"><?= $visaData->agency; ?> - <?= $visaData->branch; ?></span> 
                                    </td>



                                    <td style="text-align: center; width:50%;">
                                    <span style="font-size: 14px; color:#1aa79c;">Agency</span> 
                                    <br>
                                    <span style="font-size: 16px;font-weight: 600;"><?= $visaData->agency; ?></span>
                                    </td>

                                    </tr>
                                    <tr  style="height: 25px;"></tr>
                                    <tr  style="margin-bottom: 17px;">

                                        <td style="text-align: center; width:50%;">
                                        <span style="font-size: 14px; color:#1aa79c;" >Traveller</span> 
                                        <br>
                                        <span style="font-size: 16px; font-weight: 600;"><?= $visaData->traveller_name; ?></span> 
                                        </td>

                                        <td style="text-align: center; width:50%;">
                                        <span style="font-size: 14px; color:#1aa79c;">Passport</span> 
                                        <br>
                                        <span style="font-size: 16px;font-weight: 600;"><?= $visaData->passport_no; ?></span>
                                        </td>
                                        
                                    </tr>
                                    <tr  style="height: 25px;"></tr>
                                    <tr style=" margin-bottom: 17px;">

                                        <td style="text-align: center; width:50%;">
                                        <span style="font-size: 14px; color:#1aa79c;" >Country</span>  
                                        <br>
                                        <span style="font-size: 16px;font-weight: 600;"><?= $visaData->country_name; ?></span>
                                        </td>

                                        <td style="text-align: center; width:50%;">
                                        <span style="font-size: 14px; color:#1aa79c;" >Visa Type</span> 
                                        <br>
                                        <span style="font-size: 16px;font-weight: 600;"><?= $visaData->visa_type_name; ?></span>
                                        </td>

                                    </tr>
                                    <tr></tr>
                               
                                </table>   
                            </td>

                        </tr>


                       

                     

                        <tr style=" font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                            <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                              <b style=" text-decoration: underline; text-decoration-color: #3bafda;  text-underline-offset: 2px;">Current Status </b>  
                            </td>
                        </tr>
                        <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;   ">
                            <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; vertical-align: top; margin: 0; background-color: #1aa79c;color: white;border-radius: 4px;     padding: 5px 5px 5px 15px;     " valign="top">
                              <span style="font-size: 14px;"> <?= $visaNotesData[0]['status_value']; ?> </span>
                              <div style="height: 4px;"></div>
                              <?php if($visaNotesData[0]['notes'] != '') { ?> 
                              <span style="font-size: 12px;"> <?= $visaNotesData[0]['notes']; ?> </span>  
                              <div style="height: 4px;"></div>
                              <?php } ?> 
                              <span style="font-size: 11px;"> <?php echo date('d-M-Y h:i A', strtotime( $visaNotesData[0]['created_at'] ));  ?> </span>  
                            </td>
                        </tr>

                        <tr style=" font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                            <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                             
                            </td>
                        </tr>

                        <?php if(count($visaNotesData)  > 1) { ?>
                        <tr style=" font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                            <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                              <b style=" text-decoration: underline; text-decoration-color: #3bafda;  text-underline-offset: 2px;">Status History</b>  
                            </td>
                        </tr>
                        
                           
                        <?php foreach ($visaNotesData as $key => $value) { if($key != 0) { ?>
                            <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0; background-color: #F0FBFF;">
                            <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; color: black;   padding: 5px 5px 5px 25px; border-left: 2px solid #3BAFDA;" valign="top">
                              <span style="font-size: 14px;"> <?= $value['status_value']; ?> </span>
                              <div style="height: 4px;"></div>
                              <?php if($value['notes'] != '') { ?> 
                              <span style="font-size: 12px;"> <?= $value['notes']; ?> </span>  
                              <div style="height: 4px;"></div>
                              <?php } ?> 
                              <span style="font-size: 11px; color:#1aa79c;"> <?php echo date('d-M-Y h:i A', strtotime(  $value['created_at'] )); ?> </span>  
                            </td>
                            </tr>
                        <?php } } ?>

                        <?php } ?>
                           
                        <tr style=" font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                            <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                             
                            </td>
                        </tr>



                        <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                            <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                               <?php  if($attach){ echo "<b>**</b> Please Find Below Attachment File"; }  ?>
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


