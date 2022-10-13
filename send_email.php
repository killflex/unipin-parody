<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$template_file = "./template_mail.php";
$email = $_GET['email'];

//Server settings
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'unicompany28@gmail.com';                     //SMTP username
$mail->Password   = 'ojcvqfiidlibiglf';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//Recipients
$mail->setFrom('unicompany28@gmail.com', "Unipin's Company");
$mail->addAddress($email);     //Add a recipient
// $mail->addAddress('ellen@example.com');               //Name is optional
$mail->addReplyTo('unicompany28@gmail.com', 'Unipin Client Service');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

//Attachments
// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

$body = '<h4 style="display: block; margin-top: 0 ;padding: 0; ">Thank you for purchasing our services</h4><hr><p>Your transaction ID is cus_LOrAy5JTOYBuNr </p><hr><p>Status SUCCESS </p><hr><p>Amount 50 USD</p><hr><p>Fee 1.25%</p><hr><p>Net 47.5 USD</p><hr><p>Product is Steam Wallet (USD)</p><hr><p> Your Voucher Code is 37PQL-3WQWZ-0IIJ6</p>';

//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'Here is the subject';
$mail->Body    = $body;
$mail->AltBody = strip_tags($body);

if ($mail->send()) {
    if (!empty($_GET['tid'] && !empty($_GET['product']))) {
        $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);

        $tid = $GET['tid'];
        $product = $GET['product'];
        $amount = $GET['amount'];
        $tid = $GET['tid'];
        $product = $GET['product'];
    } else {
        header('Location: index.php');
    };
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Thank You</title>
</head>

<body>
    <div class="container mt-4">
        <h2>Thank you for purchasing <?= $product; ?></h2>
        <hr>
        <p>Your transaction ID is <?= $tid; ?></p>
        <p>Check your email for more info</p>
        <p><a href="index.php" class="btn btn-light mt-2">Go Back</a></p>
    </div>
</body>

</html>