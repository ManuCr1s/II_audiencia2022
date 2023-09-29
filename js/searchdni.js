$(function(){
    $('#buscar').on('click', function(){
       var dni = $('#dni').val();
       var url = 'scripts/consulta.php';
       $.ajax({
       type:'POST',
       url:url,
       data:'dni='+dni,
       success: function(datos_dni){
          var myData = $.parseJSON(datos_dni);
             if(!myData.status){
                  swal({
                     title: "Upps ah ocurrido un problema",
                     text: myData.message,
                     icon: "warning",
                     buttons: "Click por favor",
                  })
                  .then(() => {
                     window.location.href = 'index.php';
                  });
             }

             /*
             $('#nombre').val(myData['nombres']);
             $('#apellido').val(myData['apellidoPaterno'] + ' ' +myData['apellidoMaterno']);
             $('#dni').val(myData['dni']);*/
          }
       });
       return false;
    });
 });