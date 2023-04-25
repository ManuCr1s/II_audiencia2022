<?php

require_once 'conexion.php';

$key = $_POST['dni'];

$query = "SELECT inscripcionp.idPersona, inscripcionp.dniPersona, inscripcionp.nombrePersona, inscripcionp.apellidosPersona FROM inscripcionp WHERE dniPersona = '$key'";

$result = $db->query($query);

if ($result->num_rows > 0) {
	while($fila = $result->fetch_assoc()){
		$datos = ['dni'=> $fila['dniPersona'], 'apellidoPaterno'=>$fila['apellidosPersona'], 'apellidoMaterno'=>'', 'nombres'=>$fila['nombrePersona']];
	}
	echo json_encode($datos);
}else{
	
	$datos = file_get_contents('https://dniruc.apisperu.com/api/v1/dni/'.$key.'?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImpvaGFubmVzdmM1QGdtYWlsLmNvbSJ9.z0XDnPGLK81EXms1XO4KLFRF40MJrSjE0ixb7xj9Hpw');
	echo $datos;
}

?>