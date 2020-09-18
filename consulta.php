<?php
 
//Configuracion de la conexion a base de datos
  $bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = ""; 
  $bd_base = "programador"; 
 
	$mysqli = new mysqli($bd_host, $bd_usuario, $bd_password, $bd_base); 
	$mysqli->set_charset("utf8");
 
//consulta todos los empleados
$sqlResult=$mysqli->query("SELECT * FROM davidcanache");
echo "Cantidad de Programador: ". $sqlResult->num_rows;  
?>
<table style="color:#000099;width:400px;">
	<tr style="background:#9BB;">
		<td>Nombre</td>
		<td>Apellido</td>
		<td>cedula</td>
	</tr>
<?php
  while($row = $sqlResult->fetch_object()){
  echo "<tr>";
  	echo "<td>".$row->nombre."</td>";
  	echo "<td>".$row->apellido."</td>";
  	echo "<td>".$row->cedula."</td>";
  	echo "</tr>";
  }
?>
</table>