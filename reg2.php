<?php 
$host="localhost";
$user="root";
$pass="";
$db="productos";

$con=mysqli_connect($host,$user,$pass,$db);

$ID= $_POST['ID'];
$Cantidad= $_POST['Cantidad'];
$insertar="INSERT INTO productos2 (ID,Cantidad) VALUES ('$ID','$Cantidad')";
$query=mysqli_query($con,$insertar);
if (!$query) {
	echo "Hubo algun error";
}
else
{
	echo "Datos guardados correctamente<br><a href='Productos_dentales.html'>Volver</a>";
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
		<th>Cantidad</th>
	</tr>
	<?php
	$sql="SELECT * FROM  productos2";
	$result=mysqli_query($con,$sql);
	while ($mostrar=mysqli_fetch_array($result)) {
	?>
	<tr bgcolor="pink" align="center">
		<td><?php echo $mostrar['ID']?></td>
		<td><?php echo $mostrar['Cantidad']?></td>
	</tr> 
	<?php
	}
	?>
</table>
</body>
</html>