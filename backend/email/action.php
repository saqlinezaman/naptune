<?php

session_start();

include '../../config/database.php';

include '../../src/PHPMailer.php';
include '../../src/SMTP.php';
include '../../src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['sendbtn'])){
    $sender_name = $_POST['name'] ;
    $sender_email = $_POST['email'] ;
    $sender_massage = $_POST['massage'] ;

    if($sender_name && $sender_email && $sender_massage){

        $mail = new PHPMailer(true);

        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'szmoaj100@gmail.com';                     //SMTP username
        $mail->Password   = 'zrvf ndpe umyu ueln';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($mail->Username, 'Naptune');
        $mail->addAddress($sender_email,$sender_name);     //Add a recipient              //Name is optional
        $mail->addReplyTo($mail->Username);
        

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'welcome to naptune';
        $mail->Body    = "Dear $sender_name,
                            <br>
                        Thank you for your trust and support. It's a pleasure working with you, and we look forward to continuing our successful partnership.
                             <br>
                        Best regards, 
                         <br> 
                        [Saqline Zaman]";

        $mail->send();
        $_SESSION['mail-sent'] = 'Mail has been sent';
        header("location:../../../naptune/index.php#contact");

    }else{
        header("location:../../../naptune/index.php#contact");
        $_SESSION['mail-error'] = 'Mail has been not sent';
    }    
}
?>