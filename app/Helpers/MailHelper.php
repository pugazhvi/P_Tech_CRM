<?php

namespace App\Helpers;
use Psr\Log\LoggerInterface;

use App\Controllers\BaseController;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use App\Models\VisaRequestModel;
use App\Models\NotesModel;


class MailHelper
{
   
    public static function send_email($visa_request_id) 
    {    
        $VisaRequestModel = new VisaRequestModel();
        $NotesModel = new NotesModel();

       
        
        $data['visaData'] = $VisaRequestModel->getVisaRequestList(session()->get('logged_in_staff_branch_id'), $visa_request_id);
        $data['visaNotesData'] = $NotesModel-> getVisaRequestNotes($visa_request_id);

        $emaill = $data['visaData']->client_email;
        $subject = 'United Visa Servises - Notification';
        $html =  view('mail_template', $data);

        try {
            
            $email = \Config\Services::email();
            $email->setMailType('html');
            $email->setFrom('bbone@venbait.in', 'UVS');

            $email->setTo($emaill);

            $email->setSubject($subject);
            $email->setMessage($html);

            if ($email->send()) {
                return json_encode(['status' => 'success','code' => 200, 'message'=>'Email Sent Successfully...','data' => $emaill,],200);
            } else {
                return json_encode(['status' => 'failed','code' => 404,'message'=>'Email Sent Failed...','data' => $emaill  ],404);
            }
            
        } catch (\Exception $e) {
            return json_encode(['status' => 'failed','code' => 500,'data' => $emaill],500);
        }  
    }


    public static function send_otp_email($email_id,$otp) 
    {    
       

       
        $subject = 'UVS Forget Password - OTP';
        $message =  "Hai ,

                    We have received a request for account recovery associated with your account. To ensure the security of your account, we are sending you a one-time password (OTP) for verification purposes. Please use the following OTP to proceed with the account recovery process:
        
                    OTP: ".$otp;

        try {
            
            $email = \Config\Services::email();
            $email->setMailType('html');
            $email->setFrom('bbone@venbait.in', 'UVS');

            $email->setTo($email_id);

            $email->setSubject($subject);
            $email->setMessage($message);

            if ($email->send()) {
                return json_encode(['status' => 'success','code' => 200, 'message'=>'Email Sent Successfully...','data' => $email_id,],200);
            } else {
                return json_encode(['status' => 'failed','code' => 404,'message'=>'Email Sent Failed...','data' => $email_id  ],404);
            }
            
        } catch (\Exception $e) {
            return json_encode(['status' => 'failed','code' => 500,'data' => $email_id],500);
        }  
    }


   


}
?>