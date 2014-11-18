<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$db = new SQLite3("../base.db");
$usus = $db->query ("SELECT * FROM tigre;");
?>

<h1>BIENVENIDO:: TIGRE</h1>
<table border= "1px">
	<tr>
		<td>id</td>
		<td>nombre</td>
		<td>raza</td>
		<td>edad</td>
		

	</tr>
<?php
while ($fila = $usus-> fetchArray() ) {
	
	?>
	<tr>
		<td><?php echo $fila['Id']; ?></td>
		<td><?php echo $fila['Nombre']; ?></td>
		<td><?php echo $fila['Raza']; ?></td>
		<td><?php echo $fila['Edad']; ?></td>
		<a href="tigre/tigreeditar.php?id=<?php echo $fila['id']; ?>"> Editar</a>
		 <a href="tigre/tigreeliminar.php?id=<?php echo $fila['id']; ?>">Eliminar</a> 
		 </td>

	</tr>
	<?php
}

?>
	

</table>
</body>
</html>