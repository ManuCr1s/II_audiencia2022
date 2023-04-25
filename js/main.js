function myFunction($value) {
    if($value==1) {
        $('#proPrincipal').hide();
        $('#proA').show();
        $('#proB').hide();
        $('#proC').hide();
    }else if ($value==2) {
        $('#proPrincipal').hide();
        $('#proA').hide();
        $('#proB').show();
        $('#proC').hide();
    }else if ($value==3) {
        $('#proPrincipal').hide();
        $('#proA').hide();
        $('#proB').hide();
        $('#proC').show();
    }
}