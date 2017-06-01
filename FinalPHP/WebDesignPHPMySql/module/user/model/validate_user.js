function validate_usuario(texto){
    if (texto.length > 0){
        var reg=/^[a-zA-Z]*$/;
        return reg.test(texto);
    }
    return false;
}
function validate_antutu(texto){
    if (texto.length > 0){
        var reg=/^[0-9]*$/;
        return reg.test(texto);
    }
    return false;
}
function validate_speed(texto){
    if (texto.length > 0){
        var reg=/^[0-9]+([,][0-9]*)?$/;
        return reg.test(texto);
    }
    return false;
}
function validate_modelo(texto){
    if (texto.length > 0){
        var reg=/^[a-zA-Z0-9]*$/;
        return reg.test(texto);
    }
    return false;
}
function validate_sisop(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}
function validate_marca(texto){
    if (texto.length > 0){
        var reg=/^[a-zA-Z]*$/;
        return reg.test(texto);
    }
    return false;
}
function validate_sty(texto){
    if (texto.length > 0){
        var reg=/^[a-zA-Z0-9]*$/;
        return reg.test(texto);
    }
    return false;
}
function validate_pro(texto){
    if (texto.length > 0){
        var reg=/^[a-zA-Z0-9]*$/;
        return reg.test(texto);
    }
    return false;
}
function validate_password(texto){
    if (texto.length > 0){
        var reg = /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_nombre(texto){
    if (texto.length > 0){
        var reg=/^[a-zA-Z]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_DNI(dni){
    
  var numero = dni.substr(0,dni.length-1);
  var let = dni.substr(dni.length-1,1);
  numero = numero % 23;
  var letra='TRWAGMYFPDXBNJZSQVHLCKET';
  letra=letra.substring(numero,numero+1);
  if (letra!=let){
      return false;
  }else{
      return true;
  }
}

function validate_sexo(texto){
    var i;
    var ok=0;
    for(i=0; i<texto.length;i++){
        if(texto[i].checked){
            ok=1
        }
    }
 
    if(ok==1){
        return true;
    }
    if(ok==0){
        return false;
    }
}

function validate_fecha(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

function validate_edad(texto){
    if (texto.length > 0){
        var reg=/^[0-9]{1,2}$/;
        return reg.test(texto);
    }
    return false;
}

function validate_pais(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

function validate_idioma(array){
    var check=false;
    for ( var i = 0, l = array.options.length, o; i < l; i++ ){
        o = array.options[i];
        if ( o.selected ){
            check= true;
        }
    }
    return check;
}

function validate_observaciones(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

function validate_aficion(array){
    var i;
    var ok=0;
    for(i=0; i<array.length;i++){
        if(array[i].checked){
            ok=1
        }
    }
 
    if(ok==1){
        return true;
    }
    if(ok==0){
        return false;
    }
}

function validate(){
    var check=true
    
    var v_usuario=document.getElementById('usuario').value;
    var v_sisop=document.getElementById('sisop').value;
    var v_marca=document.getElementById('marca').value;
    var v_modelo=document.getElementById('model').value;
    var v_sty=document.getElementById('sty').value;
    var v_pro=document.getElementById('pro').value;
    var v_core=document.getElementById('core').value;
    var v_speed=document.getElementById('speed_c').value;
    
    //var v_aficion=document.getElementsByName('aficion[]').value;
    var v_fecha_nacimiento=document.getElementById('fecha').value;
    var v_observaciones=document.getElementById('observaciones').value;
    var v_antutu=document.getElementById('antutu').value;
    
    var r_usuario=validate_usuario(v_usuario);
    var r_sisop=validate_sisop(v_sisop);
    var r_marca=validate_marca(v_marca);
    var r_modelo=validate_modelo(v_modelo);
    var r_sty=validate_sty(v_sty);
    var r_core=validate_antutu(v_core);
    var r_speed=validate_speed(v_speed);
    var r_pro=validate_pro(v_pro);
    var r_fecha_nacimiento=validate_fecha(v_fecha_nacimiento);
    var r_observaciones=validate_observaciones(v_observaciones);
    var r_antutu=validate_antutu(v_antutu);
    //var r_aficion=validate_aficion(v_aficion);

    if(!r_usuario){
        document.getElementById('error_usuario').innerHTML = " * El usuario introducido no es validojs";
        check=false;
    }else{
        document.getElementById('error_usuario').innerHTML = "";
    }
    if(!r_sisop){
        document.getElementById('error_sisop').innerHTML = " * El sistema operativo introducido no es validojs";
        check=false;
    }else{
        document.getElementById('error_sisop').innerHTML = "";
    }
    if(!r_marca){
        document.getElementById('error_marca').innerHTML = " * La marca introducido no es validojs";
        check=false;
    }else{
        document.getElementById('error_marca').innerHTML = "";
    }
    if(!r_modelo){
        document.getElementById('error_model').innerHTML = " * El modelo introducido no es validojs";
        check=false;
    }else{
        document.getElementById('error_model').innerHTML = "";
    }
    if(!r_sty){
        document.getElementById('error_sty').innerHTML = " * El tipo de pantalla introducido no es validojs";
        check=false;
    }else{
        document.getElementById('error_sty').innerHTML = "";
    }
    if(!r_pro){
        document.getElementById('error_pro').innerHTML = " * El procesador introducido no es validojs";
        check=false;
    }else{
        document.getElementById('error_pro').innerHTML = "";
    }
    if(!r_core){
        document.getElementById('error_core').innerHTML = " * El procesador introducido no es validojs";
        check=false;
    }else{
        document.getElementById('error_core').innerHTML = "";
    }
    if(!r_speed){
        document.getElementById('error_speed').innerHTML = " * La velocidad de los cores introducido no es validojs";
        check=false;
    }else{
        document.getElementById('error_speed').innerHTML = "";
    }
    if(!r_fecha_nacimiento){
        document.getElementById('error_fecha_nacimiento').innerHTML = " * No has introducido ninguna fechajs";
        check=false;
    }else{
        document.getElementById('error_fecha_nacimiento').innerHTML = "";
    }
   
   
    if(!r_observaciones){
        document.getElementById('error_observaciones').innerHTML = " * El texto introducido no es validojs";
        check=false;
    }else{
        document.getElementById('error_observaciones').innerHTML = "";
    }
    if(!r_antutu){
        document.getElementById('error_antutu').innerHTML = " * El texto introducido no es validojs";
        check=false;
    }else{
        document.getElementById('error_antutu').innerHTML = "";
    }
     /* if(!r_aficion){
        document.getElementById('error_aficion').innerHTML = " * No has seleccionado ninguna aficionjs";
        check=false;
    }else{
        document.getElementById('error_aficion').innerHTML = "";
    }
    */
    return check;
}