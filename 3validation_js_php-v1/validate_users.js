function validate_usuario(usuario) {
    if (usuario.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(usuario);
    }
    return false;
}
/*
function validate_nombre(nombre) {
    if (nombre.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(nombre);
    }
    return false;
}
*/
function validate_apellidos(apellidos) {
    if (apellidos.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(apellidos);
    }
    return false;
}
function validate_procesador(procesador) {
    if (procesador.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(procesador);
    }
    return false;
}
function validate_rom(rom) {
    if (rom.length > 0) {
        var regexp = /^[0-9]*$/;
        return regexp.test(rom);
    }
    return false;
}
function validate_email(email) {
    if (email.length > 0) {
        var regexp = /^[A-Z0-9._%+-]+@(?:[A-Z0-9-]+.)+[A-Z]{2,4}$/i;
        return regexp.test(email);
    }
    return false;
}
function validate_password(password) {
    if (password.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(password);
    }
    return false;
}
function validate_password2(password, password2) {
	if(password === password2){
		return true;
    }
    return false;
}
/*
function validate_date_birthday(date_birthday) {
    if (date_birthday.length > 0) {
        var regexp = /\d{2}.\d{2}.\d{4}$/;
        return regexp.test(date_birthday);
    }
    return false;
}
*/
function validate_user() {
    var result = true;

    var usuario = document.getElementById('usuario').value;
	//var nombre = document.getElementById('nombre').value;
	var apellidos = document.getElementById('apellidos').value;
    var procesador=document.getElementById('pro_name').value;
    var rom=document.getElementById('rom').value;
	var email = document.getElementById('email').value;
	var password = document.getElementById('password').value;
	var password2 = document.getElementById('password2').value;
    var date_birthday = document.getElementById('date_birthday').value;
	
	var v_usuario = validate_usuario(usuario);
	//var v_nombre = validate_nombre(nombre);
	var v_apellidos = validate_apellidos(apellidos);
    var v_process=validate_procesador(procesador);
    var v_rom=validate_rom(rom);
	var v_email = validate_email(email);
	var v_password = validate_password(password);
	var v_password2 = validate_password2(password, password2);
    //var v_date_birthday = validate_date_birthday(date_birthday);

    if (!v_usuario) {
        document.getElementById('e_usuario').innerHTML = "La marca introducida no es valida";
        result = false;
    } else {
        document.getElementById('e_usuario').innerHTML = "";
    }
	
	if (!v_nombre) {
        document.getElementById('e_nombre').innerHTML = "El modelo introducido no es valido";
        result = false;
    } else {
        document.getElementById('e_nombre').innerHTML = "";
    }
	
	if (!v_apellidos) {
        document.getElementById('e_apellidos').innerHTML = "El tipo de pantalla introducido no es valido";
        result = false;
    } else {
        document.getElementById('e_apellidos').innerHTML = "";
    }
	
        if (!v_process) {
        document.getElementById('e_pro').innerHTML = "El tipo de procesador indroducido no es valido";
        result = false;
    } else {
        document.getElementById('e_pro').innerHTML = "";
    }

    if (!v_rom) {
        document.getElementById('e_rom').innerHTML = "El numero de rom no es valido";
        result = false;
    } else {
        document.getElementById('e_rom').innerHTML = "";
    }

	if (!v_email) {
        document.getElementById('e_email').innerHTML = "El email introducido no es valido";
        result = false;
    } else {
        document.getElementById('e_email').innerHTML = "";
    }
	
	if (!v_password) {
        document.getElementById('e_password').innerHTML = "El password introducido no es valido";
        result = false;
    } else {
        document.getElementById('e_password').innerHTML = "";
    }
	
	if (!v_password2) {
        document.getElementById('e_password2').innerHTML = "No coinciden los passwords";
        result = false;
    } else {
        document.getElementById('e_password2').innerHTML = "";
    }
/*
    if (!v_date_birthday) {
        document.getElementById('e_date_birthday').innerHTML = "La fecha introducida no es valida";
        result = false;
    } else {
        document.getElementById('e_date_birthday').innerHTML = "";
    }
    */
	return result;
}