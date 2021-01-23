$(document).ready(function() {

	setMenu();

	$("#bt_login").on('click', function(){
		validaLogin();
	})


	$(document).bind('keypress', function(e) {
        if(e.keyCode==13){
             $('#bt_login').trigger('click');
         }
    });

	fadeText();
	//listaHabilidades();

	rangeSlider();

	$(".fader").on('click', function(){
		closeFader();
	});

});
//end of jquery ready


//functions
function fadeText(){
	$(".welcome-msg").fadeIn(1500);
	$(".text-fade, .info-ranking p, .img-soccer-field-base").fadeIn(1500);
}


function validaLogin(){

	var login = $("#username").val();
	var senha = $("#password").val();

	$.ajax({
	  url: 'http://localhost:9000/dragoes/services/validaLogin.php',
	  type: 'POST',
	  dataType: 'json',
	  data: {login: login, senha: senha},
	  
	  complete: function(xhr, textStatus) {
	    console.log("complete");
	  },
	  success: function(data, textStatus, xhr) {
	    //called when successful

	    $.each(data, function(index, val) {
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
	$.ajax({
	  url: 'http://localhost:9000/dragoes/services/listaHabilidades.php',
	  type: 'POST',
	  dataType: 'JSON',
	  //data: {param1: 'value1'},
	  complete: function(textStatus) {
	    console.log("COMPLETE");
	  },
	  success: function(data) {
	    console.log("Sucesso");
	    console.log(data);

	    $.each(data, function(index, val) {
	    	 console.log(data[index].id);
	    	 console.log(data[index].nome_habilidade);
	    });
	  },
	  error: function(xhr, textStatus, errorThrown) {
	    console.log(textStatus, xhr);
	  }
	});
}


function consultaPontuacao(id_usuario, id_jogador, id_habilidade){

	var id_usuario = id_usuario;
	var id_jogador = id_jogador;
	var id_habilidade = id_habilidade;

	$.ajax({
	  url: 'http://localhost:9000/dragoes/services/consultaPontuacao.php?id_usuario='+id_usuario+'&id_jogador='+id_jogador+'&id_habilidade='+id_habilidade+'',
	  type: 'GET',
	  //dataType: 'json',
	  //data: {id_usuario: id_usuario, id_jogador: id_jogador, id_habilidade: id_habilidade},
	  
	  complete: function(xhr, textStatus) {
	    console.log("complete");
	  },
	  success: function(data, textStatus, xhr) {
	    console.log("BOOLEAN: "+data);

	    /*$.each(data, function(index, val) {
			console.log(index, val);
			
			var id_usuario_data = data[index].id_usuario;
			var habilidade_data = data[index].id_habilidade;
			var pontuacao_data = data[index].pontuacao;
			console.log(id_usuario_data);
			console.log(habilidade_data);
			console.log(pontuacao_data);

			if(id_usuario_data > 0){
				//return true;
			}
			
		});*/

	  },
	  error: function(xhr, textStatus, errorThrown) {
	  	console.log("0");
	  	console.log(textStatus);
	  	console.log(errorThrown);
	    //called when there is an error
	    alert("Consulta com problemas");
	  }
	});
}



function exibeBoxAvaliacao(id_jogador){
	$("#box_avaliacao_"+id_jogador).modal('toggle');
	$(".modal-footer-box-avaliacao").addClass('d-flex');
	

	var id_usuario = $("#idUsuario").val();
	var id_jogador = id_jogador;

	$("#box_avaliacao_"+id_jogador+" .div-lista-habilidades .input-habilidades").each(function(){

		var id_habilidade = $(this).val();

		console.log("id_usuario "+ id_usuario);
		console.log("id_jogador "+ id_jogador);
		console.log("id_habilidade "+ id_habilidade);

		//Call function - boolean
		consultaPontuacao(id_usuario, id_jogador, id_habilidade);
	});
}




function salvaPontuacao(id_jogador){

	var id_usuario = $("#idUsuario").val();
	var id_jogador = id_jogador; 
	var id_habilidade = id_habilidade; 
	var pontuacao_val = pontuacao_val; 

	$("#box_avaliacao_"+id_jogador+" .div-lista-habilidades .input-habilidades").each(function(){

		id_habilidade = $(this).val();
		pontuacao_val = $("#pontuacao_habilidade_"+id_jogador+"_"+id_habilidade).val();

		console.log("HABILIDADE: " +id_habilidade);
		console.log("PONTUACAO: " +pontuacao_val);

		$.ajax({
		  url: 'http://localhost:9000/dragoes/services/salvaPontuacao.php',
		  type: 'POST',
		  //dataType: 'json',
		  data: {id_usuario: id_usuario, id_jogador: id_jogador, id_habilidade: id_habilidade, pontuacao: pontuacao_val},
		  complete: function(xhr, textStatus) {
		   console.log("Complete!");
		  },
		  success: function(data, textStatus, xhr) {
		  	console.log("Dados inseridos");
		    exibeMsgSucesso();
		  },
		  error: function(xhr, textStatus, errorThrown) {
		    //called when there is an error
		    console.log(xhr + textStatus + errorThrown + " Dados não inseridos!");
		    exibeMsgErro();
		  }
		});
	});
}



//function closeFader(){$(".fader, .box-avaliacao").hide();}

function closeModal(id_jogador){
	$("#box_avaliacao_"+id_jogador).modal('toggle');
	$(".fade, .box-avaliacao").hide();
	$(".modal-footer-msg").css('display','none');
}


function exibeMsgSucesso(){
	$(".modal-footer-box-avaliacao").removeClass('d-flex');
	$(".modal-footer-box-avaliacao").addClass('d-none');

	$(".modal-footer-msg").css('display', 'flex');
	$(".modal-footer-msg p").css('color', '#2d771a').text("Dados inseridos com sucesso! :)");
}

function exibeMsgErro(){
	$(".modal-footer-box-avaliacao").removeClass('d-flex');
	$(".modal-footer-box-avaliacao").addClass('d-none');

	$(".modal-footer-msg").css('display', 'flex');
	$(".modal-footer-msg p").css('color', '#ce3024').html("Não foi possível inserir os dados :( <br/> Tente novamente mais tarde!");;
}



var rangeSlider = function(){
  var slider = $('.range-slider'),
      range = $('.range-slider__range'),
      value = $('.range-slider__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $(this).next(value).html(this.value);
    });
  });
};


function setMenu(){
	var url = location.pathname.split("/").pop();
	$('.navbar-nav .nav-item a[href^="'+ url +'"]').addClass('active');	
}

function logOut(){
	$.ajax({
		url: 'http://localhost:9000/dragoes/services/logOut.php',
		type: 'POST'
		//dataType: 'json'
		//data: {param1: 'value1'},
	})
	.done(function() {
		console.log("success");
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
}


function buscaJogadores(){
	console.log("entrou na function");
	
	var nome = $("#search_field").val();
	//console.log(nome);

	$.ajax({
	  url: 'http://localhost:9000/dragoes/services/buscaJogadores.php',
	  type: 'POST',
	  dataType: 'json',
	  data: {nome: nome},
	  complete: function(xhr, textStatus) {
	    //alert("completo");
	    //console.log(data);
	  },
	  success: function(data, textStatus, xhr) {
	    alert("Sucesso");
	    

	    $.each(data, function(index, val) {

	    	console.log(data[index].id);
	    	console.log(data[index].apelido);
	    	console.log(data[index].nome);
	    	console.log(data[index].image_path);


	    	$(".row-search-players").append('<div class="col-6 col-sm-6 col-md-3 col-lg-2 col-xl-2  mt-4 mb-4 text-center pl-1 pr-1">'+
							'<div class="box-player">'+
								'<h3 class="title-players anton dark-grey">'+data[index].apelido+'</h3>'+
								'<div class="img-box"><img onclick="javascript:exibeBoxAvaliacao('+data[index].id+')" class="zoom" style="cursor:pointer;max-height:140px; max-width: 190px;" src="images/'+data[index].image_path+'.jpg"></div>'+
								'<button id="bt_'+data[index].id+'" type="button" class="btn btn-green btn-block mt-2" onclick="javascript:exibeBoxAvaliacao('+data[index].id+')">'+
									'Avalie'+
								'</button>	'+
							'</div>'+
						'</div>')
	    });
	  },
	  error: function(xhr, textStatus, errorThrown) {
	    alert("Errou");
	  }
	});
	
}

  






