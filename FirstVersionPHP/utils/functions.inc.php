<?php

	function validate_user(){
		$error='';
		$filtro = array(
			'marca' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^.{4,20}$/')
			),
			
			'modelo' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^.{3,30}$/')
			),
			'scrty' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^\D{3,30}$/')
			),
            'procesador' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^\D{3,30}$/')
			),
			'rom' => array(
				'filter'=>FILTER_VALIDATE_REGEXP,
				'options'=>array('regexp'=>'/^[a-zA-Z0-9]*$/')
			),
			'date_birthday' => array(
				'filter' => FILTER_VALIDATE_REGEXP,
				'options' => array('regexp' => '/\d{2}.\d{2}.\d{4}$/')
			)
		);
		
		$resultado=filter_input_array(INPUT_POST,$filtro);
		if(!$resultado['marca']){
			$error='Marca debe tener de 4 a 20 caracteres';
		}elseif(!$resultado['modelo']){
			$error='Modelo debe tener de 3 a 30 caracteres';
        }elseif(!$resultado['scrty']){
			$error='Screen Type debe tener de 3 a 30 caracteres';
        }elseif(!$resultado['procesador']){
            $error='Procesador debe tener de 3 a 30 caracteres';
		}elseif(!$resultado['rom']){
			$error='rom debe tener de 4 a 120 caracteres';
		}elseif(!$resultado['date_birthday']){
			$error='Formato fecha dd/mm/yy';	
		}else{
			 return $return=array('resultado'=>true,'error'=>$error,'datos'=>$resultado);
		};
		return $return=array('resultado'=>false , 'error'=>$error,'datos'=>$resultado);
	};
	
	function debug($array){
		echo "<pre>";
		print_r($array);
		echo "</pre><br>";
	}
?>
