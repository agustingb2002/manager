<?php
$destino= "simplemanagerfootball@gmail.com";
$nombre= $_POST["nombre"];
$correo= $_POST["correo"];
$telefono= $_POST["telefono"];
$comentario= $_POST["comentario"];
$contenido= "Nombre" . $nombre . "\nCorreo" . $correo . "\nTelefono" . $telefono . "\nComentario" . $comentario;
max($destino,"Contacto", $contenido);
header("Location:gracias.html");

?>
	