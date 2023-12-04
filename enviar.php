<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$destinatario = "gfinastudio@gmail.com";
$asunto = "formulario g fina";
$cuerpo = "
<html>
    <head>
      <title>Correos de mi amor<title>
    <head>
    
    <body>
      <h1>mails formulario gata fina</h1>
      <p>
        Contacto: ".$nombre . " - " . $subject . " <br>
        Mensaje: ".$message. "
      </p>
    </body>
</html>
";

$headers = "MIME-Version: 1.0\r\n";
$headers . = "Content-type: text/html; charset=UTF8\r\n";

$headers . = "FORM: $nombre <$correo>\r\n";
mail($destinatario,$asunto,$cuerpo,$headers);

echo "correo enviado"

<a href="index.html">HOME</a>




