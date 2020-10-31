
$(document).ready(function(){
    
    $(".formulario-contacto").bind("submit", function(){
         
        $.ajax({
            type:$(this).attr("method"),
            url:$(this).attr("action"),
            data:$(this).serialize(),
            error: function(){
                $("#alerta").removeClass("d-none").addClass("alert-success");
                $("#campo_nombre").val('');
                $("#campo_tel").val('');
                $("#campo_asunto").val('');
                $("#campo_mensaje").val('');
            }

        });
        return false;
    });


});