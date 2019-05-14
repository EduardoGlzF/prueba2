<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php if ((isset($_POST["enviado"])) && ($_POST["enviado"] == "form1")){
	$nombre_archivo = $_FILES['userfile']['name'];
	move_uploaded_file($_FILES['userfile']['tmp_name'],"../imagenes/productos/".$nombre_archivo);
	?>
    <script> 
	opener.document.form1.strImagen.value="<?php echo $nombre_archivo; ?>";
	self.close();
    </script>
	<?php }
	else
	{?>

<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="../admin/imagenproductto.php">
  <p>
    <input name="userfile" type="file" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="subir imagen" />
  </p>
  <input type="hidden" name="enviado" value="form1" />
</form>
<?php } ?>
</body>
</html>