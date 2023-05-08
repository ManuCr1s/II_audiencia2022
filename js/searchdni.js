$(function(){
    $('#buscar').on('click', function(){
       var dni = $('#dni').val();
       var url = 'consulta.php';
       $.ajax({
       type:'POST',
       url:url,
       data:'dni='+dni,
       success: function(datos_dni){
          var myData = $.parseJSON(datos_dni);
             console.log(datos_dni)
             $('#nombre').val(myData['nombres']);
             $('#apellido').val(myData['apellidoPaterno'] + ' ' +myData['apellidoMaterno']);
             $('#dni').val(myData['dni']);
          }
       });
       return false;
    });
 });