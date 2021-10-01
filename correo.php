<?php
$destinatario = "felipecolombia2014@gmail.com";
	$NOMBRE = $_POST['NOMBRE'];
$EMAIL = $_POST['EMAIL'];
$CELULAR = $_POST['CELULAR'];
$MENSAJE = $_POST['MENSAJE'];


$header = "enviado desde TECNODISEÑO";
$mensajecompleto = $mensaje . "\nAtentamente: " . $NOMBRE;

mail($destinatario, $EMAIL, $MENSAJE, $header);
echo "<script>alert('CORREO ENVIADO EXITOSAMENTE')</script>";
echo "<script> setTimeout (\"location.href='index'\",1000)</script>";

?>