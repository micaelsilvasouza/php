<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Ajuste o caminho conforme necessário se você não estiver usando o Composer

$mail = new PHPMailer(true);

// Configuração SMTP
$mail->isSMTP();
$mail->Host = 'sandbox.smtp.mailtrap.io'; // Seu servidor SMTP
$mail->SMTPAuth = true;
$mail->Username = '3fc59107276a14'; // Seu username Mailtrap
$mail->Password = '00efa2d6c3e909'; // Sua senha Mailtrap
$mail->SMTPSecure = 'tls';
$mail->Port = 2525;

// Configuração de envio
$mail->setFrom("remetente@email.com", "Nome do Rementente");
$mail->addAddress("destinatario@email.com", "Nome do Destinatario");

// Enviar email em texto simples
/*$mail->isHTML(false); // Definir formato do email para texto simples
$mail->Subject = 'Email usando PHP';
$mail->Body = '123 TESTANDO EMAIL COM PHPMAILER';
*/

// Enviar email HTML
/*$mail->isHTML(true);
$mail->Subject = "Email usando PHP";
$mail->Body = "<h1>Email</h1><p>Enviando usando PHPMailer</p>";
$mail->AltBody = "Este é o corpo de texto altenativo";*/
$arq = fopen("email.html", "r");
$men = "";
while (!feof($arq)) {
    $men .= fgets($arq);
}

//Enviar com anexo
$mail->isHTML(true);
$mail->Subject = "Coffee Shops Email";
$mail->addEmbeddedImage("logo-grande.png", "logo");
$mail->Body = $men;

if($mail->send()){
    echo "Email enviado com sucesso";
}else{
    echo "Houve um erro: ". $mail->ErrorInfo;
}

/*
Enviando para vários destinatários

$mail->SMTPKeepAlive = true;            // adicione isso para manter a conexão SMTP aberta após cada email enviado
$users = [
  ['email' => 'max@gmail.com', 'name' => 'Max'],
  ['email' => 'box@exemplo.com', 'name' => 'Bob']
];

foreach ($users as $user) {
  $mail->addAddress($user['email'], $user['name']);
  $mail->Body = "<h2>Oi, {$user['name']}!</h2> <p>Como está?</p>";
  $mail->AltBody = "Oi, {$user['name']}! \n Como está?";
  try {
      $mail->send();
      echo "Mensagem enviada para: ({$user['email']}) {$mail->ErrorInfo}\n";
  } catch (Exception $e) {
      echo "Erro do Mailer ({$user['email']}) {$mail->ErrorInfo}\n";
  }
  $mail->clearAddresses();
}
$mail->smtpClose();                     // fechar a conexão
*/


