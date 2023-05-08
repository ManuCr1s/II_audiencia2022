$(document).ready(function(){
    $.ajax({
        type: "POST",
        url: "dates.php",
        success: function(registro) {
            var registro = $.parseJSON(registro);
            $('#number').html(registro.contador);            
        }
    });
});