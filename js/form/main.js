$(document).ready(function() {
    $("#frmSuscribir").validate({
        submitHandler: function(form) {
            var email = $("#txtCorreoSuscribite").val();
            
            $.ajax({url: "funcion/funcionboletin.php",
                type: 'POST',
                dataType: "html",
                data: {emailBoletin: email, "addBol": ""},
                beforeSend: function() {
                   // $("#wrapper").showLoading();
                },
                complete: function(respuesta) {
                    /*$("#wrapper").hideLoading();*/
                    $('#txtCorreoSuscribite').val('');
                    $("#divrespuestaBoletin").html(respuesta.responseText);
                    setTimeout('$("#divrespuestaBoletin").empty()', 3000);
                },
                error: function(respuesta) {
                    /*$("#wrapper").hideLoading();
                    $("#divrespuestaBoletin").html(respuesta.responseText);
                    setTimeout('$("#divrespuestaBoletin").empty()', 3000);*/
                }
            });
        }
    });
    
    $("#frmContacto").validate({
        submitHandler: function(form) {
            var email = $("#email").val();
            var nombre = $("#nombre").val();
            var telefono = $("#telefono").val();
            var asunto = $("#asunto").val();
            var mensaje = $("#mensaje").val();
            
            $.ajax({url: "funcion/funcioncontacto.php",
                type: 'POST',
                dataType: "html",
                data: {email: email,nombre: nombre,asunto: asunto,telefono: telefono,mensaje: mensaje, "addCont": ""},
                beforeSend: function() {
                   // $("#wrapper").showLoading();
                },
                complete: function(respuesta) {
                    /*$("#wrapper").hideLoading();*/
                    $('#txtCorreoSuscribite').val('');
                    $("#divrespuestaContacto").html(respuesta.responseText);
                    setTimeout('$("#divrespuestaContacto").empty()', 3000);
										$("#frmContacto")[0].reset();
                },
                error: function(respuesta) {
                    /*$("#wrapper").hideLoading();
                    $("#divrespuestaBoletin").html(respuesta.responseText);
                    setTimeout('$("#divrespuestaBoletin").empty()', 3000);*/
                }
            });
        }
    });
    
});