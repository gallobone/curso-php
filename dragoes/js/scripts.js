$(document).ready(function() {

	jQuery("#bt_login").on('click', function(){
		validaLogin();
	})


	$(document).bind('keypress', function(e) {
        if(e.keyCode==13){
             $('#bt_login').trigger('click');
         }
    });


	animateWelcomeMsg();

	listaHabilidades();



	jQuery(".fader").on('click', function(){
		closeFader();
	});



});
//end of jquery ready


//begin functions
function animateWelcomeMsg(){
	jQuery(".welcome-msg").fadeIn(1500);
}


function validaLogin(){

	var login = jQuery("#username").val();
	var senha = jQuery("#password").val();

	jQuery.ajax({
	  url: 'http://localhost:9000/dragoes/validaLogin.php',
	  type: 'POST',
	  dataType: 'json',
	  data: {login: login, senha: senha},
	  
	  complete: function(xhr, textStatus) {
	    console.log("complete");
	  },
	  success: function(data, textStatus, xhr) {
	    //called when successful

	    jQuery.each(data, function(index, val) {
			console.log(index, val);
			var validaId = data[index].id;

			if(validaId > 0){
				alert("Seja Bem-vindo");
				window.location.href = "index.php";
			}
			else{
				alert("LOGIN INVÁLIDO");
			}

		});

	  },
	  error: function(xhr, textStatus, errorThrown) {
	  	console.log("0");
	  	console.log(textStatus);
	  	console.log(errorThrown);
	    //called when there is an error
	    alert("Login Inválido");
	  }
	});
}


function listaHabilidades(){

	jQuery.ajax({
	  url: 'http://localhost:9000/dragoes/listaHabilidades.php',
	  type: 'POST',
	  dataType: 'JSON',
	  //data: {param1: 'value1'},
	  complete: function(textStatus) {
	    console.log("COMPLETE");
	  },
	  success: function(data) {
	    console.log("Sucesso");
	    console.log(data);

	    jQuery.each(data, function(index, val) {
	    	 console.log(data[index].id);
	    	 console.log(data[index].nome_habilidade);
	    });
	  },
	  error: function(xhr, textStatus, errorThrown) {
	    //called when there is an error
	    console.log(textStatus, xhr);
	  }
	});
}


function exibeBoxAvaliacao(id_jogador){
	//alert("teste" + id_jogador);
	//jQuery(".fader").show();
	//jQuery("#box_avaliacao_"+id_jogador).fadeIn('9000');

	jQuery("#box_avaliacao_"+id_jogador).modal('toggle')
}



function closeFader(){
	jQuery(".fader, .box-avaliacao").hide();
}




