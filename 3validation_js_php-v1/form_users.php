<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejemplo validación formulario</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	<script src="validate_users.js"></script>
</head>
<body>
	
	<form method="post" name="formusers" id="formusers" onsubmit="return validate_user();" action="index.php">
	<h1> Mobile CRUD</h1>
		<fieldset>
		<legend><span class="number">1</span>Marca-Modelo</legend>
		<p>
			<label for="usuario">Marca</label>
			<input name="usuario" id="usuario" type="text" placeholder="Marca" value="" />
			<span id="e_usuario" class="styerror"></span>
			<?php
				if ($error_nom != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_nom . "</SPAN>");
			?>
		</p>
        <p>
			<label for="nombre">Modelo</label>
			<input name="nombre" id="nombre" type="text" placeholder="Modelo" value="" />
			<span id="e_nombre" class="styerror"></span>
			
		</p>
		<legend><span class="number" id="number">2</span>Screen</legend>
		<p>
		
				<input name="screen" type="radio" value="3.5" checked>3.5" 
				<input name="screen" type="radio" value="4">4"
        		<input name="screen" type="radio" value="4.5">4.5"
        		<input name="screen" type="radio" value="5">5"
				<input name="screen" type="radio" value="5.5">5.5"
				<input name="screen" type="radio" value="6">6"
				<input name="screen" type="radio" value="6.5">6.5"
				</p>
        <p>
			<label for="apellidos">Screen Type</label>
			<input name="apellidos" id="apellidos" type="text" placeholder="Screen Type" value="" />
			<span id="e_apellidos" class="styerror"></span>
		</p>
		<legend><span class="number">3</span>Procesador</legend>
		  <p>
			<label for="procesador">Procesador</label>
			<input name="pro_name" id="pro_name" type="text" placeholder="Procesador" value="" />
			<span id="e_pro" class="styerror"></span>
		</p>
		<legend><span class="number">4</span>RAM</legend>
		<label for="ram">RAM</label>
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
			<legend><span class="number">5</span>Almacenamiento</legend>
		<p>
			<label for="rom">ROM</label>
			<input name="rom" id="rom" type="text" placeholder="ROM" value="" />
			<span id="e_rom" class="styerror"></span>
		</p>

        <p>
			<label for="email">Email</label>
			<input name="email" id="email" type="text" placeholder="Email" value="" />
			<span id="e_email" class="styerror"></span>
		</p>
        <p>
			<label for="password">Password</label>
			<input name="password" id="password" type="password" placeholder="Contrasenya" value="" />
			<span id="e_password" class="styerror"></span>
		</p>
        <p>
			<label for="password2">Repeat Password</label>
			<input name="password2" id="password2" type="password"  placeholder="Repite contrasenya" value="" />
			<span id="e_password2" class="styerror"></span>
		</p>
		<p>
			<label for="date_birthday">Date Birth</label>
			<input id="date_birthday" type="text" name="date_birthday" readonly="readonly">
			<span id="e_date_birthday" class="styerror"></span>
		</p>
		</fieldset>
		<input name="alta" type="submit" value="Alta"/>
	</form>
</body>
</html>
