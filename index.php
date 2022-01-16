<?php

    use PHPMailer\PHPMailer\PHPMailer;

    require 'vendor/autoload.php';

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Host = 'smtp.ionos.de';
    $mail->SMTPAuth = true;
    $mail->Username = '4bhitm.medtw@net-solve.at';
    $mail->Password = 'AmV3Gj&ugd963s';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('4bhitm.medtw@net-solve.at', 'apored');
    $mail->addAddress('d.kaufmann@htlkrems.at', 'Gerald');
    #$mail->addReplyTo('info@mailtrap.io', 'Mailtrap');
    #$mail->addAddress('receiver2@gfg.com', 'Name');
    #$mail->addCC('cc1@example.com', 'Elena');
    #$mail->addBCC('bcc1@example.com', 'Alex');

    $mail->Subject = 'apo';
    $mail->isHTML(true);
    $mailContent = "
        <h1>auf trocken am start</h1>
        <p>Du hast 100 likes mehr? ich hab 100 nike air.</p>
    ";
    $mail->Body = $mailContent;

    if($mail->send()) {
        echo 'Message has been sent';
    } else {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
?>