<?php
 
//Configuracion de la conexion a base de datos
  $bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = ""; 
  $bd_base = "programador"; 
 
  $mysqli = new mysqli($bd_host, $bd_usuario, null, $bd_base); 
  $mysqli->set_charset("utf8");
 
  //variables POST
  $nom=$_POST['nombre'];
  $ape=$_POST['apellido'];
  $ced=$_POST['cedula'];
  $corr=$_POST['correo'];
  $leng=$_POST['lenguaje']; 
 
  //consultamos si se repite
  $sql = "select * from davidcanache where nombre='$nom' or apellido='$ape' or cedula='$ced' or correo='$corr' or lenguajes='$leng'";
  $resul = $mysqli->query($sql) or die('Error. '.$mysqli->error);

  if ($resul->num_rows>0){
    echo "Ya existe el programador";
  }else{
    //registra los datos del empleados
    $sql="INSERT INTO davidcanache(nombre, apellido, cedula, correo, lenguajes) 
    VALUES ('$nom','$ape','$ced','$corr','$leng')";
    $mysqli->query($sql) or die('Error. '.$mysqli->error);
  } 
  include('consulta.php');
?>