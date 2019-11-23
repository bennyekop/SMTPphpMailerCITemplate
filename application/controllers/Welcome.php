<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Welcome extends CI_Controller {

	public function __construct() { 
                parent::__construct(); 
                
                require APPPATH.'libraries/phpmailer/src/Exception.php';
                require APPPATH.'libraries/phpmailer/src/PHPMailer.php';
                require APPPATH.'libraries/phpmailer/src/SMTP.php';
                 
                    }
                    function index() 
                    {

                        // PHPMailer object
                     $response = false;
                     $mail = new PHPMailer();
                    //$mail = $this->PHPMailer_Lib->load();
            
                    // SMTP configuration
                    $mail->isSMTP();
                    $mail->Host     = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'crm.support@jababeka.com';
                    $mail->Password = 'crmji2019';
                    $mail->SMTPSecure = 'ssl';
                    $mail->Port     = 465;
            
                    $mail->setFrom('crm.support@jababeka.com', '');
                    $mail->addReplyTo('crm.support@jababeka.com', '');
            
                    // Add a recipient
                    $mail->addAddress('benny@rumahweb.co.id');
            
                    // Email subject
                    $mail->Subject = 'SMTP Codeigniter';
            
                    // Set email format to HTML
                    $mail->isHTML(true);
            
                    // Email body content
                    $mailContent = "<h1>SMTP Codeigniterr</h1>
                        <p>Laporan email SMTP Codeigniter.</p>";
                    $mail->Body = $mailContent;
            
                    // Send email
                    if(!$mail->send()){
                        echo 'Message could not be sent.';
                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                    }else{
                        echo 'Message has been sent';
                    }
                }

}

