$(document).ready(function(){
    let number = $('#number');
    $.ajax({
        url:'scripts/conexion.php',
        type:'GET',
        dataType:'json',
        success: function(data) {
            number.html(data.numero);    
        },
    })
});