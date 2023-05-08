$(document).ready(function(){
    let form_id= $('#register');
    form_id.on('submit',function(event){
        event.preventDefault();
        let dates = $(this).serialize();
        $.ajax({
            url:'registro.php',
            type:'POST',
            data:dates,
            success:function(response){
                console.log(response);
                var response = jQuery.parseJSON(response);
                if(response.opcion == 1){
                    swal({
                        title: "Upps ah ocurrido un problema",
                        text: response.registro,
                        icon: "warning",
                        buttons: "Click por favor",
                      })
                      .then(() => {
                        window.location.href = 'index.php';
                      });
                }else{
                    swal({
                        title: "¡Felicidades!",
                        text: response.registro,
                        icon: "success",
                        button: "Click por favor",
                      }).then(function(){
                        window.location.href = 'index.php';
                      });
                }              
            },
            error:function(error){
                console.log(error.response);
            }
        });
    })
})