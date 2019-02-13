<?php


	$name = $_POST['name'];
	$tiposervicio = $_POST['tiposervicio'];
	$email = $_POST['email'];
	$tele = $_POST['tele'];
	$empresa = $_POST['message'];

	$header = "De: " . $email . "\r\n";
	$header .= "X-Mailer: PHP/". phpversion() . " \r\n";
	$header .= "Mime-Version: 1.0 \r\n";
	$header .= "Content-Type: text/plain";

	$mensaje = "Mensaje enviado por: " . $name . " \r\n";
	$mensaje .= "Tipo de servicio: " . $tiposervicio . " \r\n";
	$mensaje .= "Email: " . $email . " \r\n";
	$mensaje .= "Teléfono: " . $tele . " \r\n";
	$mensaje .= "Mensaje: " . $_POST['message'] . " \r\n";
	$mensaje .= "Enviado el: " . date('d/m/Y', time());

	$para = 'ventas@cargaportare.com';
	$asunto = 'Mail de la página Carga Portare';

	mail($para, $asunto, utf8_decode($mensaje), $header);

	header("Location:index.html")

?>
