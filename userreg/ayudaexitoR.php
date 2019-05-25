<?php
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        require 'phpMailer/Exception.php';
        require 'phpMailer/PHPMailer.php';
        require 'phpMailer/SMTP.php';

        $nombre= $_POST['nombre'];
        $email= $_POST['email'];
        $edad= $_POST['edad'];
        $fecha= $_POST['fecha'];
        $contenido= $_POST['mensaje'];
        $para= "eduardogonfranco@gmail.com";
        $asunto= "Saludos cordiales";
        $mensaje="
          Nombre del remitente:".$nombre."
          E-mail:".$email."
          Edad:".$edad."
          Fecha:".$fecha."
          Mensaje:".$contenido."
        ";


        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'eduardogonfranco@gmail.com';                     // SMTP username
            $mail->Password   = 'vueltas1294166';                               // SMTP password
            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('eduardogonfranco@gmail.com', 'CompuTec');
            $mail->addAddress($email);     // Add a recipient

            /*// Attachments
            $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name*/

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->charset = 'UTF-8';
            $mail->Subject = $asunto;
            $mail->Body    = $mensaje;
            /*$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';*/

            $mail->send();
            /*echo '<script>
                  alert("El mensaje se envio correctamente")
                  window.history.go(-1);
                  </script>'; //Verificacion de envio*/

        } catch (Exception $e) {
            echo "Error al enviar: {$mail->ErrorInfo}";
        }

    ?>

<!doctype html>
<html><!-- InstanceBegin template="/Templates/plantillaureg.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>CompuTec</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

<link rel="stylesheet" type="text/css" href="../estilos/estilos.css" />  

 <meta name="viewport" content="width = divice-width,
         user-scalable=no, initial-scale=1, maximum-scale=1,
         minima-scale=1">
</head>				
  		

<body id="cuerpo">
	
	<div id="principal">	
		<div id="cabecera">		
			<div id="logo"><a href="#"><img src="../imagenes/compuTec.png" width="90" height="80" alt="logoCompuTec"/></a></div> 
			
				<div id="menuHorizontal">
					<ul class="menuH">
						<li class="menuH"><a href="./index.php">Inicio</a></li>
						<li class="menuH"><a href="./telefoniauserreg.php">Telefonía</a></li>
						<li class="menuH"><a href="./catalagoreg.php">Cómputo</a></li>
						<li class="menuH"><a href="./ofertauserreg">Ofertas</a></li>
					</ul>			
				</div>					
								
		
		 </div>					 		
			 		 		 		
  		<div id="contenido">
  		
			<!--<div id="menu">Colocar aquí el contenido para  id "menu"</div> -->
			<!-- InstanceBeginEditable name="contenidoeditable" -->
			<div id="ayudaExitocont">
					<h2>Su mensaje ha sido reicibido</h2>
					<bloquote>
						Su mensaje será analizado por uno de nuestros colaboradores, pronto usted sera contactado por
						correo para darle solución a sus dudas.<br>
						<br>										
						
					</bloquote>
				</div>
			<!-- InstanceEndEditable -->
		</div><br>
		
		
		<div id="pie" >
			<div align="center" class="pieorden">
				<div class="pie1"><a href="./nosotros.php"><h2>Nosotros</h2></a> 
					<p>Nuestros valores</p>
					<p>Nuestra misión</p>
					<p>Nuestra visión</p>
				</div>
				<div class="pie1"><a href="./politicaR.php"><h2>Nuestras Políticas</h2></a>
					<p>Seguridad </p>
					<p>Calidad </p>
					<p>Devoluciones</p>
				</div>
				<div class="pie1"><a href="./ayudaR.php"><h2>Contáctanos</h2></a>
					<p>Información por correo</p>
					<p>Servicio de Ayuda</p>
				</div>
			</div>
		</div>
	</div>
</body>
<!-- InstanceEnd --></html>