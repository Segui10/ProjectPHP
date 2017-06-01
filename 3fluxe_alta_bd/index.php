<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Formulario con un botón especial</title>
	<link rel="stylesheet" href="estilos.css" type="text/css" />
	<link rel="stylesheet" href="jqueryUI/css/ui-lightness/jquery-ui-1.8.20.custom.css" type="text/css" />
	<script type="text/javascript" src="jqueryUI/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
	<script type="text/javascript" src="jqueryUI/js/jquery-ui-1.8.20.custom.min.js"></script>
	<script type="text/javascript" src="funciones.js"></script>
</head>
<body>
	<?php
	session_start();
	if(isset($_POST['grabar']) and $_POST['grabar'] == 'si'){
			$error = array(); // declaramos un array para almacenar los errores
			if($_POST['nom'] == ''){
				$error[1] = '<span class="error">Ingrese su nombre</span>';
			}else if(strlen($_POST['nom']) < 2){
				$error[1] = '<span class="error">Mínimo 2 carácteres para el nombre</span>';
			}else if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email'])){
				$error[2] = '<span class="error">Ingrese un email correcto</span>';
			}else if($_POST['asunto'] == ''){
				$error[3] = '<span class="error">Ingrese un asunto</span>';
			}else if($_POST['mensaje'] == ''){
				$error[4] = '<span class="error">Ingrese un mensaje</span>';
			}else if(strlen($_POST['mensaje']) < 20){
				$error[4] = '<span class="error">Mínimo 20 carácteres para el nombre</span>';
			}else{
				$_SESSION = $_POST;
				//print_r($_SESSION);
				//die();
				$url = "procesa.php";
				die('<script>window.location.href="'.$url.'";</script>');
		}
	}
	?>
	<div class="formulario">

	<form name="form" class="contacto" action="" method="post">
	<h3>Formulari PHP y MySQLi</h3>


		<div><input type='text' name="nom" class="nom" value="<?php @$_POST['nom'] ?>"><?php echo @$error[1] ?></div>
		<div><input type='text' name="model" class="model" value="<?php @$_POST['model'] ?>"></div>
		<hr>
		<div>
				<h2>Screen</h2>
				<h4>Screen inches</h4>
				<input name="screen" type="radio" value="3.5" checked>3.5" 
				<input name="screen" type="radio" value="4">4"
        		<input name="screen" type="radio" value="4.5">4.5"
        		<input name="screen" type="radio" value="5">5"
				<input name="screen" type="radio" value="5.5">5.5"
				<input name="screen" type="radio" value="6">6"
				<input name="screen" type="radio" value="6.5">6.5"
        </div>

		<div><h4>Screen Type</h4><input type='text' name="screen_tipo" class="screen_tipo" value="<?php @$_POST['screen_tipo'] ?>"><?php echo @$error[1] ?></div>
		<hr>
		<div><h2>Procesador</h2><input type='text' name="pro_model" class="pro_model" value="<?php @$_POST['pro_model'] ?>"><?php echo @$error[1] ?></div>
		<hr>
		<h2>RAM</h2>
		<div class="styled-select"><select id="ram" name="ram">
				<option value="0.5">0.5</option>
				<option value="1">1</option>
				<option value="1.5">1.5</option>
				<option value="2">2</option>
				<option value="2.5">2.5</option>
				<option value="3">3</option>
				<option value="3.5">3.5</option>
				<option value="4">4</option>
				<option value="4.5">4.5</option>
				<option value="5">5</option>
				<option value="5.5">5.5</option>
				<option value="6">6</option>
				<option value="6.5">6.5</option>
			</select></div>
		<hr>
		<div><h2>Almacenamiento</h2><input type='text' name="rom" class="rom" value="<?php @$_POST['rom'] ?>"><?php echo @$error[1] ?></div>
		<hr>

		<div><h2>Data Admin</h2><input type='text' name="email"  class="email" value="<?php @$_POST['email'] ?>"><?php echo @$error[2] ?></div>
		<div><input type='text' name="asunto"  class="asunto" value="<?php @$_POST['asunto'] ?>"><?php echo @$error[3] ?></div>

		<input type="hidden" name="grabar" value="si" />

		<div><textarea rows='6' name="mensaje" class="mensaje"><?php @$_POST['mensaje'] ?></textarea><?php echo @$error[4] ?></div>

		<div class="demo"><input type='submit'  name="boton" class="boton" value='Envia Mensaje'></div>
	</form>
	</div>
</body>
</html>
