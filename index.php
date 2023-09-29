<!DOCTYPE html>
 
<html lang="es">
 
<head>
<title>Audiencia Pública Regional</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/estilos.css" />
<link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</head>
<body>
   <!--
   <header>
      <div class="container mx-auto box_1">
         <div class="row mx-auto justify-content-center align-items-center">
            <div class="text-center">
               <img src="img/heade.png" class="img-fluid" style="margin-bottom: 5px;">
            </div>
         </div>

         <?php
            /*
            require_once 'conexion.php';
            $query="SELECT
            COUNT(inscripcionp.dniPersona) AS contador
            FROM
               inscripcionp";
            $result=$db->query($query);
            if ($result->num_rows>0) {
               while ($fila = $result->fetch_assoc()) {
                  $input_contador = '<h4 class="text-right" id="contador">'.number_format($fila['contador']).'<span class="text-danger"> participantes inscritos</span> </h4>';
               }
            }
            */
         ?>
         <div class="form-group col-md-12" style="margin-top:5px; color: #02416A">
         
         </div>
      </div>
   </header>-->
   <!--
   <section class="container mx-auto" style="margin-top: 1%;">
      <div class="row mx-auto justify-content-center align-items-center">

         <div class="col-md-8">            
            <h5 class="text-center" id="titleA">II Audiencia Pública Regional de Rendición de Cuentas 2022</h5> <br>
            <div class="panel panel-default row" style="background-color: #fff ;box-shadow: 2px 2px 2px 1px #474747; padding: 20px; border-radius: 15px;">
               <div class="col-12 col-md-4 d-flex align-self-center justify-content-center">
                  <img src="img/logo.png" class="img-fluid">              
               </div>
               <div class="panel-body col-12 col-md-8" style="color: #03416A">
                  <div class="page-header">
						
						<h5 class="text-center text-success" id="titleA">Formulario de registro</h5>
                  </div>
                  <form action="registro.php" method="POST" style="font-size: 13px; font-weight: 650">
                     <div class="form-row">
                        <div class="form-group col-10 col-md-10">
                           <label for="dni">DNI:</label>
                           <input type="numeric" class="form-control" id="dni" name="dni" placeholder="Ingrese Número de DNI" required autocomplete="off">
                        </div>
                        <div class="form-group col-2 col-md-2">
                           <label for="buscar">Buscar</label>
                           <button type="button" class="btn btn-primary" id="buscar">
                              <img class="svg2" src="img/icon/user-tie.svg">
                           </button>
                        </div>
                        <div class="form-group col-md-6">
                           <label for="nombre">Nombres:</label>
                           <input type="text" class="form-control" id="nombre" name="nombre" required readonly>
                        </div>
                        <div class="form-group col-md-6">
                           <label for="apellido">Apellidos:</label>
                           <input type="text" class="form-control" id="apellido" name="apellido" required readonly>
                        </div>
                        <div class="form-group col-md-6">
                           <label for="fecha">Provincia</label>
                           <select class="custom-select mr-sm-2 form-select" id="provincia" name="provincia" onchange="myFunction(value);">
                              <option selected>Seleccione su Provincia:</option>
                              <option value="1">Pasco</option>
                              <option value="2">Oxapampa</option>
                              <option value="3">Daniel A. Carrión</option>
                           </select>
                        </div>
                        <div class="form-group col-md-6" id="proPrincipal" style="">
                           <label for="dependencia">Distrito</label>
                           <select class="custom-select mr-sm-2 form-select">
                              <option selected>Seleccione Primero su Provincia</option>
                           </select>
                        </div>
                        <div class="form-group col-md-6" id="proA" style="display: none">
                           <label for="dependencia">Distrito:</label>
                           <select class="custom-select mr-sm-2 form-select" id="distritoA" name="distritoA">
                              <option selected>Seleccione su Distrito</option>
                              <option value="Chaupimarca">Chaupimarca</option>
                              <option value="Yanacancha">Yanacancha</option>
                              <option value="Huachón">Huachón</option>
                              <option value="Huariaca">Huariaca</option>
                              <option value="Huayllay">Huayllay</option>
                              <option value="Ninacaca">Ninacaca</option>
                              <option value="Pallanchacra">Pallanchacra</option>
                              <option value="Paucartambo">Paucartambo</option>
                              <option value="Yarusyacan">Yarusyacan</option>
                              <option value="Simón Bolívar">Simón Bolívar</option>
                              <option value="Ticlacayan">Ticlacayan</option>
                              <option value="Tinyahuarco">Tinyahuarco</option>
                              <option value="Vicco">Vicco</option>
                           </select>
                        </div>
                           <div class="form-group col-md-6" id="proB" style="display: none">
                           <label for="dependencia">Distrito:</label>
                           <select class="custom-select mr-sm-2 form-select" id="distritoB" name="distritoB">
                              <option selected>Seleccione su Distrito</option>
                              <option value="Oxapampa">Oxapampa</option>
                              <option value="Chontabamba">Chontabamba</option>
                              <option value="Huancabamba">Huancabamba</option>
                              <option value="Palcazú">Palcazú</option>
                              <option value="Pozuzo">Pozuzo</option>
                              <option value="Puerto Bermúdez">Puerto Bermúdez</option>
                              <option value="Villa Rica">Villa Rica</option>
                              <option value="Constitución">Constitución</option>
                           </select>
                        </div>
                        <div class="form-group col-md-6" id="proC" style="display: none">
                           <label for="dependencia">Distrito:</label>
                           <select class="custom-select mr-sm-2 form-select" id="distritoC" name="distritoC">
                              <option selected>Seleccione su Distrito</option>
                              <option value="Yanahuanca">Yanahuanca</option>
                              <option value="Chacayan">Chacayan</option>
                              <option value="Goyllarisquizga">Goyllarisquizga</option>
                              <option value="Paucar">Paucar</option>
                              <option value="San Pedro de Pillao">San Pedro de Pillao</option>
                              <option value="Santa Ana de Tusi">Santa Ana de Tusi</option>
                              <option value="Tapuc">Tapuc</option>
                              <option value="Vilcabamba">Vilcabamba</option>
                           </select>
                        </div> 
                        <div class="form-group col-md-12">
                           <label for="asociacion">Asociación u Organización a la que representa:</label>
                           <input type="text" class="form-control" id="asociacion" name="asociacion" placeholder="Ingrese Asociación u Organización" required autocomplete="off">
                        </div>
                        <div class="form-group col-md-6">
                           <label for="cargo">Cargo:</label>
                           <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Ingrese su Cargo" required autocomplete="off">
                        </div>
                        <div class="form-group col-md-6" id="proC">
                           <label for="gradoInstruccion">Grado de Instrucción:</label>
                           <select class="custom-select mr-sm-2 form-select" id="gradoInstruccion" name="gradoInstruccion">
                              <option selected>Seleccione su Grado de Instrucción</option>
                              <option value="Sin Estudios">Sin Estudios</option>
                              <option value="Primario">Primario</option>
                              <option value="Secundario">Secundario</option>
                              <option value="Medio Superior">Medio Superior</option>
                              <option value="Superior">Superior</option>
                           </select>
                        </div>
                        <div class="form-group col-md-6">
                           <label for="profesión">Profesión:</label>
                           <input type="text" class="form-control" id="profesión" name="profesión" placeholder="Ingrese su Profesión" required autocomplete="off">
                        </div>
                        <div class="form-group col-md-6">
                           <label for="fNacimiento">Fecha de Nacimiento:</label>
                           <input type="date" class="form-control" id="fNacimiento" name="fNacimiento" required>
                        </div>
                     <button type="submit" name="login" class="btn btn-primary">Inscribirte</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
   <script>
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
                  console.log(myData['dni'])
                  $('#nombre').val(myData['nombres']);
                  $('#apellido').val(myData['apellidoPaterno'] + ' ' +myData['apellidoMaterno']);
                  $('#dni').val(myData['dni']);
               }
            });
            return false;
         });
      });
   </script>-->
   <div class="container-fluid">
      <div class="row bgc bgc-blue">
      </div>
      <div class="row bgc-brown">
            <div class="container bgc-brown">
                  <form class="form-inscription" id="register">
                     
                     <div class="bgc-white mb-5 pt-4 pl-5 pr-5 pb-5">
                           <div class="form-row pb-3 mb-4 border-title">
                              <div class="col">
                                 <img src="img/log.png" alt="" class='img-header'>
                              </div>
                              <div class="col">
                                 <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                          <h5 class="font-weight-bold"><span id="number" class="number badge badge-warning">0</span>: PARTICIPANTES INSCRITOS</h5>
                                    </div>
                                 </div>
                                 
                              </div>
                           </div>

                           <div class="form-row my-2">
                              <div class="col">
                                 <h5 class='font-weight-bold text-form text-form_plomo'>FORMULARIO DE REGISTRO</h5>
                                 <p class="text-form_claro">Por favor ingrese sus datos personales</p>
                              </div>
                           </div>

                           <div class="form-row my-4">
                              <div class="form-group col-md-4">
                                    <div class="row">
                                       <div class="col-md-9">
                                             <label for="dni">Ingrese Numero de Dni</label>
                                             <input type="numeric" class="form-control input-form" id="dni" name="dni" autocomplete="off" placeholder="Numero de Documento" minlength="8" maxlength="8" required>
                                       </div>   
                                       <div class="col-md-3 d-flex align-items-end">
                                             <button type="button" class="btn btn-primary" id="buscar">
                                                <img class="svg-white" src="img/icon/user-tie.svg">
                                             </button>
                                       </div>
                                    </div>
                                 
                                
                              </div>
                              <div class="form-group col-md-4">
                                 <label for="inputPassword4">Nombres</label>
                                 <input type="text" class="form-control input-form" id="nombre" name="nombre" readonly>
                              </div>
                              <div class="form-group col-md-4">
                                 <label for="inputPassword4">Apellidos</label>
                                 <input type="text" class="form-control input-form" id="apellido" name="apellido" readonly>
                              </div>
                           </div>


                           <div class="form-row my-4">
                              <div class="form-group col-md-6">
                                 <label for="inputEmail4">Provincia</label>
                                 <select class="custom-select mr-sm-2 form-select" id="provincia" name="provincia" onchange="myFunction(value);">
                                       <option selected>Seleccione su Provincia:</option>
                                       <option value="1">Pasco</option>
                                 </select>
                              </div>

                              <div class="form-group col-md-6">
                                 <label for="inputPassword4">Distrito</label>
                                 <select class="custom-select mr-sm-2 form-select" id="distrito" name="distrito">
                                       <option selected>Seleccione su Distrito</option>
                                       <option value="Chaupimarca">Chaupimarca</option>
                                       <option value="Yanacancha">Yanacancha</option>
                                       <option value="Huachón">Huachón</option>
                                       <option value="Huariaca">Huariaca</option>
                                       <option value="Huayllay">Huayllay</option>
                                       <option value="Ninacaca">Ninacaca</option>
                                       <option value="Pallanchacra">Pallanchacra</option>
                                       <option value="Paucartambo">Paucartambo</option>
                                       <option value="Yarusyacan">Yarusyacan</option>
                                       <option value="Simón Bolívar">Simón Bolívar</option>
                                       <option value="Ticlacayan">Ticlacayan</option>
                                       <option value="Tinyahuarco">Tinyahuarco</option>
                                       <option value="Vicco">Vicco</option>
                                 </select>
                              
                              </div>
                           </div>


                           <div class="form-row  my-4">
                              <div class="form-group col-md-6">
                                 <label for="inputEmail4">Asociacion u organizacion a la que representa</label>
                                 <input type="text" class="form-control input-form" id="asociacion" name="asociacion" placeholder="Asociacion" >
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="inputPassword4">Cargo</label>
                                 <input type="text" class="form-control input-form" id="cargo" name="cargo" placeholder="Cargo" >
                              </div>
                           </div>


                           <div class="form-row my-4">
                              <div class="form-group col-md-4">
                                 <label for="inputEmail4">Grado de Instruccion</label>
                                 <select class="custom-select mr-sm-2" id="gradoInstruccion" name="gradoInstruccion">
                                    <option selected>Seleccione su Grado de Instrucción</option>
                                    <option value="Sin Estudios">Sin Estudios</option>
                                    <option value="Primario">Primario</option>
                                    <option value="Secundario">Secundario</option>
                                    <option value="Medio Superior">Medio Superior</option>
                                    <option value="Superior">Superior</option>
                                 </select>
                              </div>
                              <div class="form-group col-md-4">
                                 <label for="inputPassword4">Profesion</label>
                                 <input type="text" class="form-control input-form" placeholder="Profesion" id="profesión" name="profesión">
                              </div>
                              <div class="form-group col-md-4">
                                 <label for="inputPassword4">Fecha de Nacimiento</label>
                                 <input type="date" class="form-control input-form" placeholder="Fecha de Nacimiento" id="fNacimiento" name="fNacimiento" >
                              </div>
                           </div>
                       
                           <div class="form-row my-2">
                              <div class="form-group col-md-4">
                                 <input type="submit" class="btn bgc-orange text-white font-weight-bold px-5 py-2" value="INSCRIBIRSE">
                              </div>
                           </div>
                     </div>

                  </form>
            </div>
      </div>
   </div>
   <script type="text/javascript" src="js/jquery.js"></script>
   <script type="text/javascript" src="js/sweetalert.min.js"></script>
   <script type="text/javascript" src="js/date.js"></script>
   <script type="text/javascript" src="js/searchdni.js"></script>
   <script type="text/javascript" src="js/date_post.js"></script>
   <script type="text/javascript" src="js/count.js"></script>
</body>
</html>