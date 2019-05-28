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
			<div id="cuerpoayuda"> 
		
		<div id="formDiv">
		<div id="tituloAyuda"><h2>Servicio de ayuda</h2></div>
		 
			 <form action="ayudaExito.php" method="post">
          <table align="center">
            <tr><td>Nombre :</td>
              <td><input type="text" name="nombre" placeholder="Escribe tu nombre" required></td>
              <tr/>
              <tr><td>E-mail:</td>
                <td><input type="email" name="email" placeholder="Aqui@tucorreo.com" required></td>
              </tr>
              <tr><td>Edad:</td>
                <td><input type="number" name="edad" placeholder="Escribe tu edad" required></td>
              </tr>
              <tr><td>Fecha:</td>
                <td><input type="date" name="fecha" placeholder="Escribe la fecha" required></td>
              </tr>
              <tr><td>Mensaje:</td>
                <td><textarea name="mensaje" rows="8" cols="17" required></textarea></td>
              </tr>
              <tr><td><input type="submit" name="boton" value="Enviar"/></td>
              </tr>
          </table></form>
		</div>
	</div>
			<!-- InstanceEndEditable -->
		</div><br>
		
		
		<div id="pie" >
			<div align="center" class="pieorden">
				<div class="pie1"><a href="./nosotros.php"><h2>Nosotros</h2></a> 
					<p>Nuestros valores</p>
					<p>Nuestra misión</p>
					<p>Ubicación</p>
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