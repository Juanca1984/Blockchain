
<?php

$destinatario = 'ezequielchanay@gmail.com';
$nombre = $_POST['nombre'];
$comentario = $_POST['comentario'];
$asunto = $_POST['asunto'];


$header=" Enviado desde la pagina blokchain";
$mensajeCompleto = $mensaje . "\nAtentamente:" . $nombre;

mail($destinatario,$asunto,$mensajeCompleto,$header);

echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script>setTimeout(\ "location.href='..\Pagina_de_inicio.html'\ ",1000)</script>";

?>