/*$(function() {
		$( "input:submit", ".demo" ).button();
		$( ".demo" ).click(function() { return false; });
	});
*/
//Aquí comenzamos creando un plugin
jQuery.fn.LlenarLimpiarCampos = function(){
	this.each(function(){
		$(".nom").attr("value","Marca");
		$(".nom").focus(function(){
			if($(".nom").attr("value")=="Marca"){
			$(".nom").attr("value","");
			}
		});
		$(".nom").blur(function(){
			if($(".nom").attr("value")==""){
		   $(".nom").attr("value","Marca");
			}
		});

		$(".model").attr("value","Model");
		$(".model").focus(function(){
			if($(".model").attr("value")=="Model"){
			$(".model").attr("value","");
			}
		});
		$(".model").blur(function(){
			if($(".model").attr("value")==""){
		   $(".model").attr("value","Model");
			}
		});

	   $(".screen_tipo").attr("value","Screen Type");
		$(".screen_tipo").focus(function(){
			if($(".screen_tipo").attr("value")=="Screen Type"){
			$(".screen_tipo").attr("value","");
			}
		});
		$(".screen_tipo").blur(function(){
			if($(".screen_tipo").attr("value")==""){
		   $(".screen_tipo").attr("value","Screen Type");
			}
		});

		$(".pro_model").attr("value","Procesador");
		$(".pro_model").focus(function(){
			if($(".pro_model").attr("value")=="Procesador"){
			$(".pro_model").attr("value","");
			}
		});
		$(".pro_model").blur(function(){
			if($(".pro_model").attr("value")==""){
		   $(".pro_model").attr("value","Procesador");
			}
		});


		$(".rom").attr("value","ROM");
		$(".rom").focus(function(){
			if($(".rom").attr("value")=="ROM"){
			$(".rom").attr("value","");
			}
		});
		$(".rom").blur(function(){
			if($(".rom").attr("value")==""){
		   $(".rom").attr("value","ROM");
			}
		});
		$(".email").attr("value","Your Email Adress");
		$(".email").focus(function(){
			if($(".email").attr("value")=="Your Email Adress"){
			$(".email").attr("value","");
			}
		});
		$(".email").blur(function(){
			if($(".email").attr("value")==""){
		   $(".email").attr("value","Your Email Adress");
			}
		});
		$(".asunto").attr("value","Introduzca su asunto");
		$(".asunto").focus(function(){
			if($(".asunto").attr("value")=="Introduzca su asunto"){
			$(".asunto").attr("value","");
			}
		});
		$(".asunto").blur(function(){
			if($(".asunto").attr("value")==""){
		   $(".asunto").attr("value","Introduzca su asunto");
			}
		});
			$(".mensaje").attr("value","Introduzca su mensaje");
		$(".mensaje").focus(function(){
			if($(".mensaje").attr("value")=="Introduzca su mensaje"){
			$(".mensaje").attr("value","");
			}
		});
		$(".mensaje").blur(function(){
			if($(".mensaje").attr("value")==""){
		   $(".mensaje").attr("value","Introduzca su mensaje");
			}
		});
	});
	return this;
};

$(document).ready(function () {
	$(this).LlenarLimpiarCampos();

    var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    $(".boton").click(function(){
    	$(".error").remove();
		if( $(".nom").val() == "" || $(".nom").val() == "Marca"){
			$(".nom").focus().after("<span class='error'>Please, insert your name</span>");
			return false;
		}else if($(".nom").val().length < 2){
			$(".nom").focus().after("<span class='error'>Minimum 2 characters for the name</span>");
			return false;
		}else if( $(".model").val() == "" || $(".model").val() == "Model"){
			$(".model").focus().after("<span class='error'>Please, insert your name</span>");
			return false;
		}else if($(".model").val().length < 2){
			$(".model").focus().after("<span class='error'>Minimum 2 characters for the name</span>");
			return false;
		}else if( $(".screen_tipo").val() == "" || $(".screen_tipo").val() == "Screen Type"){
			$(".screen_tipo").focus().after("<span class='error'>Please, insert your name</span>");
			return false;
		}else if($(".screen_tipo").val().length < 2){
			$(".screen_tipo").focus().after("<span class='error'>Minimum 2 characters for the name</span>");
			return false;

		}else if( $(".pro_model").val() == "" || $(".pro_model").val() == "Procesador"){
			$(".pro_model").focus().after("<span class='error'>Please, insert your name</span>");
			return false;
		}else if($(".pro_model").val().length < 2){
			$(".pro_model").focus().after("<span class='error'>Minimum 2 characters for the name</span>");
			return false;
		}else if( $(".rom").val() == "" || $(".rom").val() == "ROM"){
			$(".rom").focus().after("<span class='error'>Please, insert your name</span>");
			return false;
		}else if($(".rom").val().length < 2){
			$(".rom").focus().after("<span class='error'>Minimum 2 characters for the name</span>");
			return false;

		}else if( $(".email").val() == "" ||  !emailreg.test($(".email").val()) || $(".email").val() == "Your Email Adress"){
			$(".email").focus().after("<span class='error'>Please, insert a correct email</span>");
			return false;
		}else if( $(".asunto").val() == "" || $(".asunto").val() == "Introduzca su asunto"){
			$(".asunto").focus().after("<span class='error'>Ingrese un asunto</span>");
			return false;
		}else if( $(".mensaje").val() == "" || $(".mensaje").val() == "Introduzca su mensaje"){
			$(".mensaje").focus().after("<span class='error'>Ingrese un mensaje</span>");
			return false;
		}else if($(".mensaje").val().length < 20){
			$(".mensaje").focus().after("<span class='error'>Mínimo 20 carácteres para el mensaje</span>");
			return false;
		}
	});

	//realizamos funciones para que sea más práctico nuestro formulario
	$(".nom,.model, .pro_model, .screen_tipo,.rom, .asunto, .mensaje").keyup(function(){
		if ( $(this).val() != "" ){
			$(".error").fadeOut();
			return false;
		}
	});

	$(".nom").keyup(function(){
		if ($(this).val().length >= 2){
			$(".error").fadeOut();
			return false;
		}
	});

	$(".model").keyup(function(){
		if ($(this).val().length >= 2){
			$(".error").fadeOut();
			return false;
		}
	});

	$(".pro_model").keyup(function(){
		if ($(this).val().length >= 2){
			$(".error").fadeOut();
			return false;
		}
	});
	$(".screen_tipo").keyup(function(){
		if ($(this).val().length >= 2){
			$(".error").fadeOut();
			return false;
		}
	});

	
	$(".rom").keyup(function(){
		if ($(this).val().length >= 2){
			$(".error").fadeOut();
			return false;
		}
	});
	$(".email").keyup(function(){
		if ( $(this).val() != "" && emailreg.test($(this).val())){
			$(".error").fadeOut();
			return false;
		}
	});

	$(".mensaje").keyup(function(){
		if ($(this).val().length >= 20){
			$(".error").fadeOut();
			return false;
		}
	});
});
