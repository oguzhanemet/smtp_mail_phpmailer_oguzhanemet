<?php

error_reporting(1);



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer(true);


exit();



try {
  
    $mail->isSMTP();
    $mail->Host       = 'your smtp host'; 
    $mail->SMTPAuth   = true;
    $mail->Username   = 'your smtp username'; 
    $mail->Password   = 'your smtp password';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;; 
    $mail->Port       = 'choose your port'; 
    $mail->setFrom('your mail', 'title');
   
 
    $mail->isHTML(true);
    $mail->CharSet  = 'ISO-8859-9';
    $mail->Subject = 'Subject';
	$mail->Body = file_get_contents('app/views/bulkMail/index.php');
	$mail->AddBCC($mailAddress);
    $mail->send();
	foreach ($params['data'] as $key => $value) {
		
        
		
		$emails[] = $value['uye_mail'];
		
		 $chunkedEmails = array_chunk($emails, 1000);
    foreach ($chunkedEmails as $emailGroup) {
        foreach ($emailGroup as $email) {
            $mail->addAddress($email);
        }
	
	//for ($i = 1; $i <= 1000; $i++) {
        
    }
        //echo "E-posta $i gönderildi.<br>";
   // }
	}
 $mail->send();
   
    echo '<script>alert("Successfull!");</script>';
echo '<script>history.go(-1);</script>';
    exit;
    
} catch (Exception $e) {
    echo "Email could not be sent. Error: {$mail->ErrorInfo}";
}






?>