<?php
  require_once 'conexion.php';
  $query="SELECT COUNT(*) AS contador FROM inscripcionp";
  $result=$db->query($query);
  echo json_encode($result->fetch_assoc());
