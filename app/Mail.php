<?php 

namespace app;

// Подключение PhpMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/Exception.php';

class Mail
{
    public static function sendMail($userEmail, $smtpEmail, $smtpPass, $smtpHost, $subject, $html) 
    {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = $smtpHost;
            $mail->SMTPAuth = true;
            $mail->Username = $smtpEmail;
            $mail->Password = $smtpPass;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;
        
            $mail->CharSet = "UTF-8";
            $mail->setLanguage('ru', "phpmailer/language/");

            $mail->setFrom($smtpEmail, 'MAYBESMART');
            $mail->addAddress($userEmail);
         
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $html;
        
            $mail->send();
            return true;
            
        } catch (\Exception $e) {
            return false;
        }
    }
}