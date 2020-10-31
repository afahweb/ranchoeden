<?php

 header("Content-type: application/json; charset=utf-8");
 
 $fecha = date("d-m-y");
 $hora = date("H:i");
 $destinatario="clientes@ranchoeden.com";
 $asunto = "Contacto del Cliente";
 $alert='';

 $nombre = $_POST['nombre'];
 $telefono = $_POST['telefono'];
 $asunto = $_POST['asunto'];
 $mensaje = $_POST['mensaje'];

 $texto = "Nombre:  "   .$nombre . "\n" . "Email:  "  .$telefono . "\n" . "Asunto:  "  . $asunto . "\n" ."Requerimiento:  " .$mensaje . "\n" ."Fecha:  " . $fecha . "\n" . "Hora:  "  .$hora;
 mail($destinatario, $asunto, $texto);

 return print(json_decode('ok'));
?>
