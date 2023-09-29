<?php
if (isset($_POST)){
	$dni = $_POST['dni'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$provincia = $_POST['provincia'];
	$distrito = $_POST['distrito'];
	$asociacion = $_POST['asociacion'];
	$cargo = $_POST['cargo'];
	$gradoInstruccion = $_POST['gradoInstruccion'];
	$profesión = $_POST['profesión'];
	$fNacimiento = $_POST['fNacimiento'];
}
require_once 'conexion.php';
$select="SELECT inscripcionp.dniPersona FROM inscripcionp WHERE dniPersona = '$dni'";
$result=$db->query($select);
if($result->num_rows > 0){
	$message = array('registro'=>'Ya se encuetra registrado','opcion'=>1);
	echo json_encode($message);
}else{
	$insertRes = " INSERT INTO inscripcionp (dniPersona, nombrePersona, apellidosPersona, provinciaP, distritoP, asociacionOrg, cargoPerson, gradoInstruccion, profesionPersona, fNacimiento) VALUES ('$dni', '$nombre', '$apellido', '$provincia', '$distrito', '$asociacion', '$cargo', '$gradoInstruccion', '$profesión', '$fNacimiento') ";
	if ($db->query($insertRes)) {
		$message = array('registro'=>'Usted se ha registrado Satisfactoriamente','opcion'=>2);
		echo json_encode($message);
	}
}
?>