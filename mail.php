<?php

    include_once 'database.php';
    # steps

    // Include the required phpmailer files
    require 'includes/PHPMailer.php';
    require 'includes/SMTP.php';
    require 'includes/Exception.php';

    // define name spaces
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // create instance of phpmailer
    $mail = new PHPMailer();

    // set mailer to use smtp
    $mail->isSMTP();

    // define smtp host
    $mail->Host = 'smtp.gmail.com';

    // enable smtp authentication
    $mail->SMTPAuth = "true";

    // set type of encrytion (ssl/tls)
    $mail->SMTPSecure = "tls";

    // set port to connect smtp
    $mail->Port = "587";

    // set username -- add personal/work email here
    $mail->Username = "";

    // set password -- add custom password/generated password
    $mail->Password = "";

    // set email subject
    $mail->Subject = "Hey, you have a customer!";

    // set sender email
    $mail->setFrom($email, 'Website');

    // enable HTML
    $mail->isHTML(true);

    // email body
    $mail->Body = "<h2> Name: " . $name . "</h2><br><br><h2>Company: " . $company . "</h2><br><br><h2>Comment: " . $comment . "</h2>" ;

    // add recipient -- change to personal/work email for testing -- addBCC, addCC for multiple emails
    $mail->addAddress("");
    $mail->addCC("");

    // send email
    if($mail->Send()){
        echo "Email Sent...";
    } else {
        echo "Mission Failed...we'll get them next time!";
    }

    // closing smtp connection
    $mail->smtpClose();
?>