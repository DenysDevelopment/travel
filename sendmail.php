<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'phpmailer/src/Exception.php'
  require 'phpmailer/src/PHPMailer.php'

  $mail = new PHPMailer(true);
  $mail->CharSet = 'UTF-8';
  $mail->setLanguage('ru','phpmailer/language/');
  $mail->IsHTML(true);

  // от кого
  $mail->setFrom('info@info.info', 'заявка с сайта')
  // кому
  $mail->addAddress('code@code.info')

  $mail->Subject = 'Welcome'

  $body = "<p><b>От куда</b>: $_POST['ot']<p>"
  $body .= "<p><b>Куда</b>: $_POST['kuda']<p>"
  $body .= "<p><b>Дата</b>: $_POST['date']<p>"
  $body .= "<p><b>Телефон</b>: $_POST['count']<p>"
  $body .= "<p><b>Количество взрозлых</b>: $_POST['tell']<p>"
  $body .= "<p><b>Количество детей</b>: $_POST['countchild']<p>"

  $mail->Body = $body;

  $response = ['message' => $message]

  header('Content-Type', 'application/json')