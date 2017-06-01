<?php
    function validate_usuario($texto){
        $reg="/^[a-zA-Z0-9]*$/";
        return preg_match($reg,$texto);
    }
 
    function validate_password($texto){
        $reg = "/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/";
        return preg_match($reg,$texto);
    }
    
    function validate_nombre($texto){
        $reg="/^[a-zA-Z]*$/";
        return preg_match($reg,$texto);
    }
    
    function validate_DNI($dni){
        $reg="/^[0-9]{8}[A-Z]$/";
        return preg_match($reg,$dni);
    }
    
    function validate_sexo($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate_fecha($texto){
        if(empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate_edad($texto){
        $reg="/[0-9]{1,2}$/";
        return preg_match($reg,$texto);
    }
    
    function validate_pais($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate_idioma($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate_observaciones($texto){
        if(empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate_aficion($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate(){
        $check=true;
        $error=array();
        $v_usuario=$_POST['usuario'];
        $v_fecha_nacimiento=$_POST['fecha_nacimiento'];
        $v_observaciones=$_POST['observaciones'];
        
        $r_usuario=validate_usuario($v_usuario);
        $r_fecha_nacimiento=validate_fecha($v_fecha_nacimiento);
        $r_observaciones=validate_observaciones($v_observaciones);
        
        if($r_usuario !== 1){
            $error_usuario = " * El usuario introducido no es valido";
            $check=false;
        }else{
            $error_usuario = "";
        }
        if(!$r_fecha_nacimiento){
            $error_fecha_nacimiento = " * No has introducido ninguna fecha";
            $check=false;
        }else{
            $error_fecha_nacimiento = "";
        }
        if(!$r_observaciones){
            $error_observaciones = " * El texto introducido no es valido";
            $check=false;
        }else{
            $error_observaciones = "";
        }
        
        $error = array (
            'usuario' => $error_usuario,
            'fecha_nacimiento' => $error_fecha_nacimiento,
            'observaciones' => $error_observaciones
            );
        $resultado=array('resultado'=>$check , 'error'=>$error);
        return $resultado;
    }