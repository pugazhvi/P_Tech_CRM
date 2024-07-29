<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
<head>
<meta name="viewport" content="width=device-width"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>

<body style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; max-width: 800px !important; height: 100%; line-height: 1.6em; background-color: #f6f6f6; margin: 0;"  bgcolor="#f6f6f6">

<div class="body-wrap" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 800px; background-color: #f6f6f6; margin: 0;" bgcolor="#f6f6f6">
    <div style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></div>
    <div class="container" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px;  display: block !important; max-width: 800px !important; clear: both !important; margin: 0 auto;" valign="top">
        <div class="content" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 800px; display: block; margin: 0 auto; padding: 20px;">
            <div class="main" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; margin: 0; border: none;">
                <div class="content-wrap" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;padding: 30px;border: 3px solid #3bafda;border-radius: 7px; background-color: #fff;" valign="top">
                    <meta itemprop="name" content="Confirm Email" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"/>
                    
                    <div style="text-align: center; margin-bottom: 5px;">
                        <a href="#">
                            <img src="<?= base_url()."public"; ?>/assets/images/login-logo.png" height="24" alt="logo" style="width: 200px; height: 85px;"/>
                        </a>
                        <br/>
                    </div>



                    <div style="margin-bottom: 17px; border-bottom: 2px solid #3bafda; padding: 0 0 10px;">
                        <table width="100%" style="border-spacing: 0; border-collapse: collapse;">
                            <tr>
                                <td style="width: 50%; text-align: center;">
                                    <span style="font-size: 14px; color:#1aa79c;">Client</span>
                                    <br>
                                    <span style="font-size: 16px; font-weight: 600;"><?= $visaData->agency .' - ' . $visaData->branch ?></span>
                                </td>
                                <td style="width: 50%; text-align: center;">
                                    <span style="font-size: 14px; color:#1aa79c;">Company</span>
                                    <br>
                                    <span style="font-size: 16px; font-weight: 600;"><?= $visaData->company_name; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%; text-align: center; padding-top: 10px;">
                                    <span style="font-size: 14px; color:#1aa79c;">Traveller</span>
                                    <br>
                                    <span style="font-size: 16px; font-weight: 600;"><?= $visaData->traveller_name; ?></span>
                                </td>
                                <td style="width: 50%; text-align: center; padding-top: 10px;">
                                    <span style="font-size: 14px; color:#1aa79c;">Passport</span>
                                    <br>
                                    <span style="font-size: 16px; font-weight: 600;"><?= $visaData->passport_no; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%; text-align: center; padding-top: 10px;">
                                    <span style="font-size: 14px; color:#1aa79c;">Country</span>
                                    <br>
                                    <span style="font-size: 16px; font-weight: 600;"><?= $visaData->country_name; ?></span>
                                </td>
                                <td style="width: 50%; text-align: center; padding-top: 10px;">
                                    <span style="font-size: 14px; color:#1aa79c;">Visa Type</span>
                                    <br>
                                    <span style="font-size: 16px; font-weight: 600;"><?= $visaData->visa_type_name; ?></span>
                                </td>
                            </tr>
                        </table>
                    </div>




                    <div style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                        <div class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                            <b style="text-decoration: underline; text-decoration-color: #3bafda; text-underline-offset: 2px;">Current Status</b>
                        </div>
                    </div>




                    <div style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0; background-color: #1aa79c; color: white; border-radius: 4px; padding: 5px 5px 5px 15px;" valign="top">
                        <span style="font-size: 14px;"> <?= $visaNotesData[0]['status_value']; ?> </span>
                        <div style="height: 4px;"></div>
                        <?php if($visaNotesData[0]['notes'] != '') { ?> 
                        <span style="font-size: 12px;"> <?= $visaNotesData[0]['notes']; ?> </span>
                        <div style="height: 4px;"></div>
                        <?php } ?> 
                        <span style="font-size: 11px;"> <?php echo date('d-M-Y h:i A', strtotime( $visaNotesData[0]['created_at'] )); ?> </span>
                    </div>




                    <div style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                        <div class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top"></div>
                    </div>




                    <?php if(count($visaNotesData) > 1) { ?>
                    <div style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                        <div class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                            <b style="text-decoration: underline; text-decoration-color: #3bafda; text-underline-offset: 2px;">Status History</b>
                        </div>
                    </div>
                    
                    <?php foreach ($visaNotesData as $key => $value) { if($key != 0) { ?>
                        <div style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0; background-color: #F0FBFF;">
                            <div class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; color: black; padding: 5px 5px 5px 25px; border-left: 2px solid #3BAFDA;" valign="top">
                                <span style="font-size: 14px;"> <?= $value['status_value']; ?> </span>
                                <div style="height: 4px;"></div>
                                <?php if($value['notes'] != '') { ?>
                                <span style="font-size: 12px;"> <?= $value['notes']; ?> </span>
                                <div style="height: 4px;"></div>
                                <?php } ?>
                                <span style="font-size: 11px;"> <?php echo date('d-M-Y h:i A', strtotime($value['created_at'])); ?> </span>
                            </div>
                        </div>
                        <div style="height: 5px;"></div>
                    <?php } } } ?> 



                    
                   
                </div>
            </div>
            
        </div>
    </div>
</div>

</body>
</html>
