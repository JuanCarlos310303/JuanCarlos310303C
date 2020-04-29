<?php 
$host="localhost";
$user="root";
$pass="";
$db="citaod2";

$con=mysqli_connect($host,$user,$pass,$db);

$Nombre= $_POST['Nombre'];
$Apellidop= $_POST['Apellidop'];
$Apellidom= $_POST['Apellidom'];
$Fecha= $_POST['Fecha'];
$Hora= $_POST['Hora'];
$insertar="INSERT INTO citaodontológica (Nombre,Apellidop,Apellidom,Fecha,Hora) VALUES ('$Nombre','$Apellidop','$Apellidom','$Fecha','$Hora')";
$query=mysqli_query($con,$insertar);
if (!$query) {
	echo "Hubo algun error";
}
else
{
	echo "Datos guardados correctamente<br><a href='Cita_medica.html'>Volver</a>";
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Mostrar Datos</title>
</head>
<body>
<table width="50%" border="2">
	<tr bgcolor="red">
		<th>ID</th>
		<th>Nombre</th>
		<th>Apellidop</th>
		<th>Apellidom</th>
		<th>Fecha</th>
		<th>Hora</th>
	</tr>
	<?php
	$sql="SELECT * FROM  citaodontológica";
	$result=mysqli_query($con,$sql);
	while ($mostrar=mysqli_fetch_array($result)) {
	?>
	<tr bgcolor="pink" align="center">
		<td><?php echo $mostrar['ID']?></td>
		<td><?php echo $mostrar['Nombre']?></td>
		<td><?php echo $mostrar['Apellidop']?></td>
		<td><?php echo $mostrar['Apellidom']?></td>
		<td><?php echo $mostrar['Fecha']?></td>
		<td><?php echo $mostrar['Hora']?></td>
	</tr> 
	<?php
	}
	?>
</table>
</body>
</html>
