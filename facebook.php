<?php
	/* cambiamos la imagen a png */
	$img = $_POST['archivo'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Boon -  Facebook</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src= "http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<style>
		#tre{
		background-color: #FFFFFF;
		border: 1px solid #DDD;
		border-radius: 5px;
		box-shadow: 0 0 5px #888;
		color: #666;
		float: left;
		padding: 5px 27px 5px 10px;
		width: 165px;
		outline: none;
	}
	</style>
</head>
<body>
	<div>
		<form action="http://canvas.nullcool.com/ftpupload.php" method="post" enctype="multipart/form-data"><b>Escribe el texto a compartir:</b><br> 
			<input style="display:none;"id="mainarchivo" type="text" value ="<?php echo $img?>" name="archivo"/><br>
			<input id="tre" type="text" name="strcomp"/>
			<input id ="subm" type="submit" name="enviar" value="Compartir" /><br>
			<input id="hid" type="hidden" name="action" value="upload" />
		<strong><?php echo $rpta; ?></strong>
		</form>
	</div>
	
</body>
</html>
