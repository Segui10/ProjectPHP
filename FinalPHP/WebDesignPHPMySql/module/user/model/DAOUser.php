<?php
    include("model/connect.php");
    
	class DAOUser{
		function insert_user($datos){
			$user=$datos['usuario'];
            $sisop=$datos['sisop'];
            $marca=$datos['marca'];
            $model=$datos['model'];
            $screty=$datos['screty'];
            $sty=$datos['sty'];
            $pro=$datos['pro'];
            $repan=$datos['repan'];
            $core=$datos['core'];
            $speed=$datos['speed_c'];
        	$birthdate=$datos['fecha_nacimiento'];
        	$country=$datos['pais'];
            $email=$datos['email'];
        	$comment=$datos['observaciones'];
        	$url=$datos['urlimg'];
            $antutu=$datos['antutu'];
            $cober='';
            foreach ($datos['aficion'] as $indice) {
                $cober=$cober."$indice:";
            }
        	$sql = " INSERT INTO usuario (user,sisop, marca,model,screen,sty,repan,pro,core,speed, birthdate, country, comment, urlimg, antutu,cober,email)"
        		. " VALUES ('$user','$sisop','$marca','$model','$screty','$sty','$repan','$pro','$core','$speed', '$birthdate', '$country', '$comment','$url','$antutu','$cober',$email)";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function select_all_user(){
			$sql = "SELECT * FROM usuario ORDER BY user ASC ";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
		function select_so_user($so){
            $sql = "SELECT * FROM usuario WHERE sisop='$so' ORDER BY user ASC ";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }
        function select_order_user($so){
            $sql = "SELECT * FROM usuario ORDER BY $so DESC ";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }
        function update_fav($fav,$user){
            $sql = "UPDATE usuario SET fav=$fav WHERE user='$user'";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }
        function select_favs(){
            $sql = "SELECT * FROM usuario WHERE fav='1'";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }
		function select_user($user){
			$sql = "SELECT * FROM usuario WHERE user='$user'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
		
		function update_user($datos){
			$user=$datos['usuario'];
            $sisop=$datos['sisop'];
            $marca=$datos['marca'];
            $model=$datos['model'];
            $screty=$datos['screty'];
            $sty=$datos['sty'];
            $pro=$datos['pro'];
            $core=$datos['core'];
            $speed=$datos['speed_c'];
        	$birthdate=$datos['fecha_nacimiento'];
        	$country=$datos['pais'];
            $repan=$datos['repan'];
        	$comment=$datos['observaciones'];
        	$urlimg=$datos['urlimg'];
            $antutu=$datos['antutu'];
            $email=$datos['email'];
            $cober='';
            foreach ($datos['aficion'] as $indice) {

                $cober=$cober."$indice:";
            }
        	$sql = " UPDATE usuario SET sisop='$sisop',marca='$marca',model='$model',screen='$screty',sty='$sty',repan='$repan',pro='$pro',core='$core',speed='$speed',birthdate='$birthdate',country='$country', "
                . " comment='$comment',urlimg='$urlimg',antutu='$antutu',cober='$cober',email='$email' WHERE user='$user'";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function delete_user($user){
			$sql = "DELETE FROM usuario WHERE user='$user'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
	}