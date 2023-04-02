<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fabrício Damasceno</title>
</head>
<body> 
    

<?php

if(isset($_POST['email']) && !empty($_POST['email'])) {

    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $contact    = $_POST['contact'];
    $subject    = $_POST['subject'];
    $message    = $_POST['message'];
    
    $to = "fabricio.damasceno@outlook.com.br";

    $body = "Nome: ".$name. "\r\n".
            "E-mail: ".$email."\r\n".
            "Contato: ".$contact."\r\n".
            "Mensagem: ".$message;

    $headers = "From: ".$email."\r\n".
            "Reply-To: ".$to."\r\n";
            "X=Mailer:PHP/".phpversion();

           mail($to,$subject,$body,$headers);

           print "Email enviado com Sucesso!!!";
/*
  if(mail($email,$subject,$body,$headers)){
    echo("E-mail enviado com sucesso!!!");
  }else{
    echo("Falha ao enviar e-mail. Favor entrar em contato com o Suporte clicando aqui!!!");
  }
  */

}

?>

</body>
</html>