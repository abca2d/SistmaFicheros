$(function() {	

	
	$('#nuevaAsistencia').on('click', function(){
		$('#modalAsistencia').modal({
			show:true,
			backdrop:'static',
		});
	});
 	$('#b_archivo').on('click', function(){
		$('#modalformato').modal({
			show:true,
			backdrop:'static',
		});
	});
	$('#b_user').on('click', function(){
		$('#modalcreauser').modal({
			show:true,
			backdrop:'static',
		});
	});

 $('#guardar').on('click', function(){	
       var re = $("#input#lefile").val();
       var nombre =$("#nombre").val();
       if(nombre!="" & re!=""){
       $.ajax({
          type: "post",  
          url: "../Negocio/subida.php",
          data: {valor:re,nombre_a:nombre},
           success: function(data){
         if(data!=""){
            $("#cajatexto").show();
            }else{
             $("#cajatexto").hide();
            }
        }
          });
          window.location.href="inicio.php";//
          }else{
          	
          		$("#hidden1").show();
          		$("#hidden2").show();	
          	
          	
          }  
      // window.location.href="../Negocio/subida.php";
   
});

 $('#enviar').on('click', function(){
 	var nombre=$("#inputEmail").val();
 	var apellido=$("#inputPassword").val();
 	var rol=$(".form-control").attr('value');
 	var email=$("#email").val();
 	if(nombre==""){
 		$("#error_nombre").show();
 	}else{
 		$("#error_nombre").hide();
 	}
 	if(apellido==""){
    $("#error_apellido").show();
 	}else{
 		$("#error_apellido").hide();
 	}
 	if(email==""){
 		$("#error_email").show();
 	}else{
 		$("#error_email").hide();
 	}
 	if(nombre!="" && apellido!="" && email!=""){
/*  $.ajax({
          type: "POST",  
          url: "../Negocio/Correo.php",
          data: {nombre_:nombre,apellido_:apellido,rol_:rol,email_:email},
           success: function(data){
            alert("Tdo fue un exito");
           }
          });*/
 	}
	});

	$('#regresar').on('click', function(){
		window.location.href="inicio.php";
	});

		$('#b_tablas').on('click', function(){
             window.location.href = "../Admin/tablas.php";
	});
});	



