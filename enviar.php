<?php
$target = "mcamilavalencia1020@gmail.com";
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

setcookie("gnombre",$nombre,time() + 60*60*24*30);
setcookie("gcorreo",$correo,time() + 60*60*24*30);

$msg =  "Nombre: ".$nombre. "\n" ."Correo: ".$correo. "\n" ."Asunto: ".$asunto. "\n" ."Mensaje: ".$mensaje;
$msg2 = "Gracias por enviarnos tu mensaje, porfavor espera nuestra pronta respuesta";
mail($target,"Mensaje",$msg);
mail($correo,"Mensaje enviado correctamente",$msg2);
header("location : contacto.html");

?>

