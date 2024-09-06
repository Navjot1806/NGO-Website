<?php
    require_once('PHPMailer/PHPMailerAutoload.php');
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth=true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = '465';
    $mail->isHTML();
    $mail->Username = 'vishakhdesai@gmail.com';
    $mail->Password = 'Vishakh@2025';
    $mail->setFrom('vishakhdesai@gmail.com');
    $mail->Subject = 'Hello';
    $mail->Body = 'Test email2';
    $mail->addAddress('jainilpatel308@yahoo.com');
    $mail->send();
?>