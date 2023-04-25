<?php

$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$provincia = $_POST['provincia'];

$asociacion = $_POST['asociacion'];
$cargo = $_POST['cargo'];
$gradoInstruccion = $_POST['gradoInstruccion'];
$profesión = $_POST['profesión'];
$fNacimiento = $_POST['fNacimiento'];

require_once 'conexion.php';

if ($provincia==1) {
	$distrito = $_POST['distritoA'];
	$provincia = 'Pasco';
}elseif ($provincia==2) {
	$distrito = $_POST['distritoB'];
	$provincia = 'Oxapampa';
}elseif ($provincia==3) {
	$distrito = $_POST['distritoC'];
	$provincia = 'Daniel A. Carrión';
}

$select="SELECT inscripcionp.dniPersona FROM inscripcionp WHERE dniPersona = '$dni'";
$result=$db->query($select);
if($result->num_rows > 0){
	header('Location: inscripcionPage.php');
}else{
	$insertRes = " INSERT INTO inscripcionp (dniPersona, nombrePersona, apellidosPersona, provinciaP, distritoP, asociacionOrg, cargoPerson, gradoInstruccion, profesionPersona, fNacimiento) VALUES ('$dni', '$nombre', '$apellido', '$provincia', '$distrito', '$asociacion', '$cargo', '$gradoInstruccion', '$profesión', '$fNacimiento') ";

	if ($db->query($insertRes)) {
		header('Location: recomendPage.php');
	}
}
?>