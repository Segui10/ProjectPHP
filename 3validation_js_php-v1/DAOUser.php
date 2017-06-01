<?php
    include ("connect.php");
    
	class DAOUser{
		function nuevo_user($user){
			 $sql = "INSERT INTO mensajes(marca, modelo, screen, screen_type, procesador,ram,rom,email,"
                . " hora, fecha) VALUES ('$user[usuario]', '$user[nombre]', '$user[screen]',"
                . " '$user[apellidos]', '$user[pro_name]' ,'$user[ram]' ,'$user[rom]','$user[email]' , now(), now())";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
	}