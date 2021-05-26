<?php
//Capturamos las variables
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentarios = $_POST['comentarios'];

//Cuerpo de Mail
$mensaje="
<strong>Nombre: </strong> $nombre <br> <br>
<strong>Email: </strong> $email <br> <br>
<strong>Consulta: </strong> $comentarios <br> <br>
";

//Envío de email
mail("fedevalle27@gmail.com", "Consulta Cuadernos Indigo", $mensaje, "From: $nombre <$mail>\nReply-To:$mail\nContent-Type:text-html; charset-iso-8859-1\n");
?>
