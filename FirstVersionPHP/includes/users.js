function validate_marca(marca) {
    if (marca.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(marca);
    }
    return false;
}
function validate_modelo(modelo) {
    if (modelo.length > 0) {
        var regexp = /^[a-zA-Z0-9\s]*$/;
        return regexp.test(modelo);
    }
    return false;
}
function validate_rom(rom) {
    if (rom.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(rom);
    }
    return false;
}

function validate_date_birthday(date_birthday) {
    if (date_birthday.length > 0) {
        var regexp = /\d{2}.\d{2}.\d{4}$/;
        return regexp.test(date_birthday);
    }
    return false;
}
function validate_scrty(scrty) {
    if (scrty.length > 0) {
        var regexp = /^[a-zA-Z0-9]*$/;
        return regexp.test(scrty);
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
function validate_user() {
    var result = true;

    var marca = document.getElementById('marca').value;
	var modelo = document.getElementById('modelo').value;
    var scrty = document.getElementById('scrty').value;
    var procesador = document.getElementById('procesador').value;
	var rom = document.getElementById('rom').value;
    var date_birthday = document.getElementById('date_birthday').value;
	
	var v_marca = validate_marca(marca);
	var v_modelo = validate_modelo(modelo);
    var v_scrty = validate_scrty(scrty);
    var v_procesador = validate_procesador(procesador);
	var v_rom = validate_rom(rom);
	var v_date_birthday = validate_date_birthday(date_birthday);

    if (!v_marca) {
        document.getElementById('e_marca').innerHTML = "La marca introducida no es valida";
        result = false;
    } else {
        document.getElementById('e_marca').innerHTML = "";
    }
	
	if (!v_modelo) {
        document.getElementById('e_modelo').innerHTML = "El modelo introducido no es valido";
        result = false;
    } else {
        document.getElementById('e_modelo').innerHTML = "";
    }
	
    if (!v_scrty) {
        document.getElementById('e_scrty').innerHTML = "El tipo de pantalla introducido no es valido";
        result = false;
    } else {
        document.getElementById('e_scrty').innerHTML = "";
    }
	
     if (!v_procesador) {
        document.getElementById('e_procesador').innerHTML = "El procesador introducido no es valido";
        result = false;
    } else {
        document.getElementById('e_procesador').innerHTML = "";
    }
    
	if (!v_rom) {
        document.getElementById('e_rom').innerHTML = "Los apellidos introducidos no son validos";
        result = false;
    } else {
        document.getElementById('e_rom').innerHTML = "";
    }
	
    if (!v_date_birthday) {
        document.getElementById('e_date_birthday').innerHTML = "La fecha introducida no es valida";
        result = false;
    } else {
        document.getElementById('e_date_birthday').innerHTML = "";
    }
	return result;
}
