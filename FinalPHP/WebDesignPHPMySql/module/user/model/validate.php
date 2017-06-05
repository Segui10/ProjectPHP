<?php
    function validate_usuario($texto){
        if(empty($texto)){
            return false;
        }else{
            $reg="/^[a-zA-Z0-9]*$/";
        return preg_match($reg,$texto);
        }
        
    }
 
   function validate_marca($texto){
    if(empty($texto)){
            return false;
        }else{
            $reg="/^[a-zA-Z0-9]*$/";
        return preg_match($reg,$texto);
        }
    
   }
   function validate_modelo($texto){
    if(empty($texto)){
            return false;
        }else{
            $reg="/^[a-zA-Z0-9]*$/";
        return preg_match($reg,$texto);
        }
    
   }
   function validate_sty($texto){
    if(empty($texto)){
            return false;
        }else{
            $reg="/^[a-zA-Z0-9]*$/";
        return preg_match($reg,$texto);
        }
    
   }
   function validate_pro($texto){
    if(empty($texto)){
            return false;
        }else{
            $reg="/^[a-zA-Z0-9]*$/";
        return preg_match($reg,$texto);
        }
    
   }
   function validate_cores($texto){
    if(empty($texto)){
            return false;
        }else{
            $reg="/^[0-9]*$/";
        return preg_match($reg,$texto);
        }
    
   }
   function validate_speed($texto){
    if(empty($texto)){
            return false;
        }else{
            $reg="/^-?[0-9]+([,\.][0-9]*)?$/";
        return preg_match($reg,$texto);
        }
    
   }
    function validate_nombre($texto){
        if(empty($texto)){
            return false;
        }else{
            $reg="/^[a-zA-Z]*$/";
        return preg_match($reg,$texto);
        }
        
    }
    function validate_email($email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
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
        $v_marca=$_POST['marca'];
        $v_modelo=$_POST['model'];
        $v_sty=$_POST['sty'];
        $v_pro=$_POST['pro'];
        $v_core=$_POST['core'];
        $v_speed=$_POST['speed_c'];
        $v_antutu=$_POST['antutu'];
        $v_fecha_nacimiento=$_POST['fecha_nacimiento'];
        $v_observaciones=$_POST['observaciones'];
        $v_email=$_POST['email'];
        //$v_aficion=$_POST['aficion[]'];

        $r_usuario=validate_usuario($v_usuario);
        $r_marca=validate_marca($v_marca);
        $r_model=validate_modelo($v_modelo);
        $r_sty=validate_sty($v_sty);
        $r_pro=validate_pro($v_pro);
        $r_core=validate_cores($v_core);
        $r_speed=validate_speed($v_speed);
        $r_antutu=validate_cores($v_antutu);
        $r_fecha_nacimiento=validate_fecha($v_fecha_nacimiento);
        $r_observaciones=validate_observaciones($v_observaciones);
        $r_email=validate_email($v_email);
        //$r_aficion=validate_aficion($v_aficion);

        if($r_usuario !== 1){
            $error_usuario = " * El usuario introducido no es validophp";
            $check=false;
        }else{
            $error_usuario = "";
        }
        if($r_marca !== 1){
            $error_marca = " * La marca introducida no es validaphp";
            $check=false;
        }else{
            $error_marca = "";
        }
        if($r_model !== 1){
            $error_model = " * El modelo introducido no es validophp";
            $check=false;
        }else{
            $error_model = "";
        }
        if($r_sty !== 1){
            $error_sty = " * El tipo de pantalla introducido no es validophp";
            $check=false;
        }else{
            $error_sty = "";
        }
         if($r_pro !== 1){
            $error_pro = " * El procesador introducido no es validophp";
            $check=false;
        }else{
            $error_pro = "";
        }
        if($r_core !== 1){
            $error_core = " * El core introducido no es validophp";
            $check=false;
        }else{
            $error_core = "";
        }
        if($r_speed !== 1){
            $error_speed = " * La velocidad introducida no es valida PHP";
            $check=false;
        }else{
            $error_speed = "";
        }
        if($r_antutu !== 1){
            $error_antutu = " * La puntuacion de antutu introducida no es validaphp";
            $check=false;
        }else{
            $error_antutu = "";
        }
        if(!$r_fecha_nacimiento){
            $error_fecha_nacimiento = " * No has introducido ninguna fechaphp";
            $check=false;
        }else{
            $error_fecha_nacimiento = "";
        }
        if(!$r_observaciones){
            $error_observaciones = " * El texto introducido no es validophp";
            $check=false;
        }else{
            $error_observaciones = "";
        }
        if(!$r_email){
            $error_email = " * No has introducido un email validophp";
            $check=false;
        }else{
            $error_email = "";
        }
        /*if(!$r_aficion){
            $error_aficion = " * No has seleccionado ninguna aficion";
            $check=false;
        }else{
            $error_aficion = "";
        }*/
        
        $error = array (
            'usuario' => $error_usuario,
            'marca' => $error_marca,
            'model' => $error_model,
            'sty' => $error_sty,
            'pro' => $error_pro,
            'core' => $error_core,
            'speed' => $error_speed,
            'antutu' => $error_antutu,
            'fecha_nacimiento' => $error_fecha_nacimiento,
            'observaciones' => $error_observaciones,
            'email' => $error_email,
            );
        $resultado=array('resultado'=>$check , 'error'=>$error);
        return $resultado;
    }